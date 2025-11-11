<x-app-layout title="Tableau de Bord">
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Titre de la page -->
            <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-200 mb-6">Tableau de Bord</h2>

            <!-- Cartes KPI -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total des Tenants -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 flex items-center">
                    <div class="bg-blue-100 dark:bg-blue-800/20 p-4 rounded-full">
                        <i class="fa-solid fa-users fa-2x text-blue-500 dark:text-blue-300"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total des Tenants</p>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $totalTenants }}</p>
                    </div>
                </div>

                <!-- Nouveaux Tenants -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 flex items-center">
                    <div class="bg-green-100 dark:bg-green-800/20 p-4 rounded-full">
                        <i class="fa-solid fa-user-plus fa-2x text-green-500 dark:text-green-300"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Nouveaux (30j)</p>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $newTenantsLast30Days }}</p>
                    </div>
                </div>
                
                <!-- Répartition des Plans -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 col-span-1 sm:col-span-2">
                    <div class="flex items-center">
                       <div class="bg-indigo-100 dark:bg-indigo-800/20 p-4 rounded-full">
                           <i class="fa-solid fa-tags fa-2x text-indigo-500 dark:text-indigo-300"></i>
                       </div>
                       <div class="ml-4">
                           <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Répartition des Plans</p>
                           <div class="flex items-baseline space-x-3">
                               @forelse($planDistribution as $plan => $count)
                                   <p class="text-xl font-bold text-gray-900 dark:text-gray-100">
                                       {{ $count }} <span class="text-sm font-medium text-gray-500">{{ $plan ?: 'Standard' }}</span>
                                   </p>
                               @empty
                                   <p class="text-xl font-bold text-gray-900 dark:text-gray-100">N/A</p>
                               @endforelse
                           </div>
                       </div>
                    </div>
                </div>
            </div>

            <!-- Graphique et Listes -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Graphique d'inscriptions -->
                <div class="lg:col-span-2 bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200 mb-4">Inscriptions des 12 derniers mois</h3>
                    <canvas id="registrationsChart" style="max-height:200px !important" class=" w-full"></canvas>
                </div>

                <!-- Listes -->
                <div class="space-y-8">
                    <!-- Derniers Tenants Inscrits -->
                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200 mb-4">Derniers Tenants</h3>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($recentTenants as $tenant)
                                <li class="py-3">
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">{{ $tenant->data['name'] ?? $tenant->id }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $tenant->created_at->diffForHumans() }}</p>
                                </li>
                            @empty
                                <li class="py-3 text-sm text-gray-500">Aucun nouveau tenant.</li>
                            @endforelse
                        </ul>
                    </div>

                    <!-- Tenants les plus actifs -->
                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200 mb-4">Tenants les plus actifs (par utilisateurs)</h3>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($mostActiveTenants as $tenant)
                                <li class="py-3 flex justify-between items-center">
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">{{ $tenant['name'] }}</p>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                                        {{ $tenant['user_count'] }} <i class="fa-solid fa-user ml-2"></i>
                                    </span>
                                </li>
                            @empty
                                <li class="py-3 text-sm text-gray-500">Données insuffisantes.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        const ctx = document.getElementById('registrationsChart').getContext('2d');
        const registrationsChart = new Chart(ctx, {
            type: 'bar', // ou 'line'
            data: {
                labels: {!! json_encode($chartLabels) !!},
                datasets: [{
                    label: 'Nouveaux Tenants',
                    data: {!! json_encode($chartValues) !!},
                    backgroundColor: 'rgba(59, 130, 246, 0.5)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
    @endpush
</x-app-layout>