<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Exports\TenantsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rule;

class TenantController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'search'   => $request->input('search', ''),
            'sort_by'  => $request->input('sort_by', 'created_at'),
            'sort_dir' => $request->input('sort_dir', 'desc'),
            'per_page' => $request->input('per_page', 10),
        ];

        $query = Tenant::with('domains');

        if (!empty($filters['search'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('id', 'like', '%' . $filters['search'] . '%')
                  // Requête spécifique pour la colonne JSON 'data' (MySQL 5.7+)
                  ->orWhere('data->name', 'like', '%' . $filters['search'] . '%')
                  ->orWhereHas('domains', function ($domainQuery) use ($filters) {
                      $domainQuery->where('domain', 'like', '%' . $filters['search'] . '%');
                  });
            });
        }
        
        // Note: Le tri sur les colonnes JSON ('data->name') peut être lent.
        // On le permet ici mais il est désactivé par défaut dans la vue pour de meilleures performances.
        $query->orderBy($filters['sort_by'], $filters['sort_dir']);
        
        $tenants = $query->paginate($filters['per_page'])->withQueryString();

        return view('tenants.index', compact('tenants', 'filters'));
    }

    public function create()
    {
        return view('tenants.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|unique:tenants|alpha_dash|min:3',
            'domain' => ['required', 'string', 'unique:domains,domain', 'regex:/^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'data' => 'required|array',
            'data.name' => 'required|string|max:255',
            'data.plan' => 'nullable|string',
        ]);

$tenant = Tenant::create([
    'id' => $validated['id'],
    'data' => [
        'name' => $validated['data']['name'],
        'plan' => $validated['data']['plan'] ?? 'Standard', // ajoute la clé plan
    ],
]);
$tenant->update([
    'data->plan' => $validated['data']['plan'] ?? 'Standard', // met à jour le plan après que le package ait fini
]);
        $tenant->createDomain(['domain' => $validated['domain']]);

        return redirect()->route('tenants.index')->with('success', 'Tenant créé avec succès.');
    }

    public function edit(Tenant $tenant)
    {
        $tenant->load('domains');
        return view('tenants.edit', compact('tenant'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'domain' => [
                'required', 'string',
                Rule::unique('domains')->ignore($tenant->domains->first()?->id),
                'regex:/^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'data' => 'required|array',
            'data.name' => 'required|string|max:255',
            'data.plan' => 'nullable|string',
        ]);

        $tenant->update(['data' => $validated['data']]);
        
        if ($tenant->domains->first()) {
            $tenant->domains->first()->update(['domain' => $validated['domain']]);
        } else {
            $tenant->createDomain(['domain' => $validated['domain']]);
        }
        
        return redirect()->route('tenants.index')->with('success', 'Tenant mis à jour avec succès.');
    }
    
    // Les méthodes show, destroy et export restent inchangées...

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return redirect()->route('tenants.index')->with('success', 'Tenant supprimé avec succès.');
    }

    public function export()
    {
        return Excel::download(new TenantsExport, 'tenants.xlsx');
    }
}
