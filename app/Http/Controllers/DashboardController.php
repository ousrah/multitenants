<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // --- Statistiques KPI ---

        $totalTenants = Cache::remember('stats_total_tenants', 60, function () {
            return Tenant::count();
        });

        $newTenantsLast30Days = Cache::remember('stats_new_tenants_30d', 60, function () {
            return Tenant::where('created_at', '>=', now()->subDays(30))->count();
        });

        // Répartition des plans depuis la colonne JSON 'data'
$planDistribution = Cache::remember('stats_plan_distribution', 60, function () {
    return Tenant::all()
        ->pluck('data.plan')
        ->map(fn($plan) => $plan ?: 'Standard')
        ->countBy()
        ->sortDesc();
});
        // --- Données pour le Graphique d'Inscriptions ---

        $registrations = Tenant::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
            DB::raw('COUNT(id) as count')
        )
        ->where('created_at', '>=', now()->subYear())
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();

        // On s'assure d'avoir tous les mois, même ceux sans inscriptions
        $chartData = collect([]);
        for ($i = 11; $i >= 0; $i--) {
            $month = Carbon::now()->startOfMonth()->subMonths($i);
            $monthKey = $month->format('Y-m');
            $reg = $registrations->firstWhere('month', $monthKey);
            $chartData->put($month->format('M Y'), $reg ? $reg->count : 0);
        }
        $chartLabels = $chartData->keys();
        $chartValues = $chartData->values();

        // --- Listes d'informations ---

        $recentTenants = Cache::remember('stats_recent_tenants', 60, function () {
            return Tenant::with('domains')->latest()->take(5)->get();
        });

        // Note : Cette statistique peut être lente si vous avez beaucoup de tenants.
        // Le cache est fortement recommandé.
        $mostActiveTenants = Cache::remember('stats_most_active_tenants', 360, function () {
            $tenantsWithUserCount = [];
            Tenant::cursor()->each(function ($tenant) use (&$tenantsWithUserCount) {
                try {
                    // Exécute une requête dans la base de données du tenant
                    $userCount = tenancy()->run($tenant, function () {
                        // Supposons que vous avez une table 'users' dans chaque DB de tenant
                        return DB::table('users')->count(); 
                    });
                    $tenantsWithUserCount[] = [
                        'name' => $tenant->data['name'] ?? $tenant->id,
                        'user_count' => $userCount
                    ];
                } catch (\Exception $e) {
                    // Gérer les erreurs si une base de données de tenant n'est pas accessible
                    report($e);
                }
            });
            // Trier par le nombre d'utilisateurs et prendre les 5 premiers
            return collect($tenantsWithUserCount)->sortByDesc('user_count')->take(5);
        });
        
        return view('dashboardtenants', compact(
            'totalTenants',
            'newTenantsLast30Days',
            'planDistribution',
            'chartLabels',
            'chartValues',
            'recentTenants',
            'mostActiveTenants'
        ));
    }

    public function dashboard(Request $request)
    {


       /** @var \App\Models\User $user */
        $user = Auth::user();

        // Données communes à tous les rôles
        $data = [
            'user' => $user,
            'userRole' => $this->getUserRoleLabel($user->role),
        ];

        // Données spécifiques selon le rôle

        if ($user->isAdmin()) {
            $data = array_merge($data, $this->getAdminDashboardData());
        } elseif ($user->isAccountant()) {
            $data = array_merge($data, $this->getAccountantDashboardData($user));
        } elseif ($user->isCompany()) {
            $data = array_merge($data, $this->getCompanyDashboardData($user));
        }

        return view('dashboard', $data);
    }

    private function getUserRoleLabel($role)
    {
        return match($role) {
            'ADMIN' => 'Administrateur',
            'ACCOUNTANT' => 'Comptable',
            'COMPANY' => 'Entreprise',
            default => 'Utilisateur'
        };
    }

    private function getAdminDashboardData()
    {
        return [
            'totalUsers' => User::count(),
            'totalCompanies' => Company::count(),
            'totalAccountants' => User::where('role', 'ACCOUNTANT')->count(),
            'recentUsers' => User::latest()->take(5)->get(),
            'companiesWithoutAccountant' => Company::whereDoesntHave('accountants')->get(),
        ];
    }

    private function getAccountantDashboardData(User $user)
    {
        $managedCompanies = $user->managedCompanies;

        return [
            'managedCompanies' => $managedCompanies,
            'totalManagedCompanies' => $managedCompanies->count(),
            'companiesUsers' => User::whereHas('contact', function($query) use ($managedCompanies) {
                $query->whereIn('company_id', $managedCompanies->pluck('id'));
            })->count(),
        ];
    }

    private function getCompanyDashboardData(User $user)
    {
        return [
            'company' => $user->contact?->company,
            'companyUsers' => User::where('contact_id', $user->contact_id)->count(),
        ];
    }
}
