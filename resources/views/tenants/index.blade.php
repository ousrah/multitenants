<x-app-layout title="Gestion des Tenants">
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto" x-data="columnsManager">

            <!-- En-tête de la page -->
            <div class="sm:flex sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-200">Gestion des Tenants</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Gérez les comptes clients (tenants) et leurs domaines d'accès.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-4 flex space-x-3 items-center">
                     <!-- Bouton de gestion des colonnes -->
                     <div class="relative">
                         <button @click="showDropdown = !showDropdown" class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-200">
                             <i class="fa-solid fa-eye mr-2"></i> Colonnes
                         </button>
                         <div x-show="showDropdown" @click.outside="showDropdown = false" x-transition class="absolute right-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-md shadow-lg z-50 border dark:border-gray-600" style="display: none;">
                             <div class="py-2 px-3">
                                <template x-for="col in allColumns" :key="col.key">
                                    <label class="flex items-center space-x-3 py-1">
                                        <input type="checkbox" x-model="columns[col.key]" class="rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary dark:bg-gray-700 dark:focus:ring-offset-gray-800">
                                        <span class="text-sm text-gray-700 dark:text-gray-300" x-text="col.label"></span>
                                    </label>
                                </template>
                             </div>
                         </div>
                     </div>
                     <!-- Boutons d'action principaux -->
                     <a href="{{ route('tenants.create') }}" class="btn bg-primary text-white"><i class="fa-solid fa-plus mr-2"></i> Nouveau Tenant</a>
                     <a href="{{ route('tenants.export') }}" class="btn bg-success text-white"><i class="fa-solid fa-file-excel mr-2"></i> Exporter Excel</a>
                 </div>
            </div>

            <!-- Filtres et recherche -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="p-4">
                    <form action="{{ route('tenants.index') }}" method="GET" class="flex items-center space-x-4">
                        <div class="relative flex-grow">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3"><i class="fa-solid fa-search text-gray-400"></i></span>
                            <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Rechercher par ID, nom, domaine..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                        </div>
                        <div class="flex items-center space-x-2">
                            <label for="per_page" class="text-sm font-medium text-gray-600 dark:text-gray-300">Lignes:</label>
                            <select name="per_page" id="per_page" class="py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" onchange="this.form.submit()">
                                @foreach([10, 25, 50, 100] as $option)
                                    <option value="{{ $option }}" @if($filters['per_page'] == $option) selected @endif>{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn bg-primary text-white">Filtrer</button>
                    </form>
                </div>

                <!-- Tableau des tenants -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700/50">
                            <tr>
                                @php
                                    // Fonction helper pour générer les en-têtes de colonnes triables
                                    function sortableHeader($label, $column, $filters) {
                                        $isCurrentSort = $filters['sort_by'] === $column;
                                        $nextSortDir = $isCurrentSort && $filters['sort_dir'] === 'asc' ? 'desc' : 'asc';
                                        $url = route('tenants.index', array_merge(request()->query(), ['sort_by' => $column, 'sort_dir' => $nextSortDir]));
                                        $icon = $isCurrentSort ? ($filters['sort_dir'] === 'asc' ? 'fa-sort-up' : 'fa-sort-down') : 'fa-sort';
                                        echo "<th scope='col' class='px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider whitespace-nowrap'><a href='{$url}' class='flex items-center space-x-1 hover:text-gray-800 dark:hover:text-gray-100'><span>{$label}</span><i class='fa-solid {$icon}'></i></a></th>";
                                    }
                                @endphp

                                <template x-if="columns.id">{!! sortableHeader('ID', 'id', $filters) !!}</template>
                                <template x-if="columns.name"><th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nom</th></template>
                                <template x-if="columns.domain"><th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Domaine</th></template>
                                 <template x-if="columns.created_at">{!! sortableHeader('Créé le', 'created_at', $filters) !!}</template>
                                <th scope="col" class="relative px-4 py-3"><span class="sr-only">Actions</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($tenants as $tenant)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                                    <td x-show="columns.id" class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">{{ $tenant->id }}</td>
                                    <td x-show="columns.name" class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">{{ $tenant->data['name'] ?? '' }}</td>
                                    <td x-show="columns.domain" class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        @if($domain = $tenant->domains->first()?->domain)
                                            <a href="{{ tenant_route($tenant->id, 'login') }}" target="_blank" class="text-primary hover:underline">
                                                {{ $domain }} <i class="fa-solid fa-external-link-alt text-xs ml-1"></i>
                                            </a>
                                        @else
                                            <span class="text-gray-400">N/A</span>
                                        @endif
                                    </td>
                                    <td x-show="columns.created_at" class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">{{ $tenant->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end items-center space-x-2">
                                            <a href="{{ route('tenants.edit', $tenant) }}" class="text-primary hover:text-primary-focus p-2" x-tooltip.placement.left="'Modifier le tenant'">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('tenants.destroy', $tenant) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce tenant ? Cette action est irréversible.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-error hover:text-error-focus p-2" x-tooltip.placement.left="'Supprimer le tenant'">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td :colspan="visibleColumnCount + 1" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Aucun tenant trouvé pour les critères sélectionnés.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Liens de pagination -->
            <div class="mt-6">
                {{ $tenants->links() }}
            </div>
        </div>
    </div>

   @push('scripts')
<script>
    // On écoute l'événement 'alpine:init' qui est déclenché par Alpine.js
    // une fois qu'il est prêt, mais avant qu'il n'initialise les composants du DOM.
    document.addEventListener('alpine:init', () => {
        // On enregistre notre composant 'columnsManager' ici.
        Alpine.data('columnsManager', () => ({
            // État initial de la visibilité des colonnes
            columns: {
                id: true,
                name: true,
                domain: true,
                plan: true,
                created_at: true
            },
            showDropdown: false,
            // Définition des colonnes disponibles pour le menu
            allColumns: [
                { key: 'id', label: 'ID Tenant' },
                { key: 'name', label: 'Nom' },
                { key: 'domain', label: 'Domaine' },
                { key: 'plan', label: 'Plan' },
                { key: 'created_at', label: 'Date de création' }
            ],
            // Initialisation du composant Alpine
            init() {
                // Tente de charger les préférences de l'utilisateur depuis le localStorage
                const savedVisibility = localStorage.getItem('tenantColumnVisibility');
                if (savedVisibility) {
                    // Fusionne les colonnes par défaut avec celles sauvegardées pour éviter les erreurs si de nouvelles colonnes sont ajoutées
                    this.columns = { ...this.columns, ...JSON.parse(savedVisibility) };
                }

                // Surveille les changements dans l'objet 'columns' et les sauvegarde dans le localStorage
                this.$watch('columns', (newValue) => {
                    localStorage.setItem('tenantColumnVisibility', JSON.stringify(newValue));
                });
            },
            // Calcule le nombre de colonnes actuellement visibles (pour le colspan de la ligne vide)
            get visibleColumnCount() {
                return Object.values(this.columns).filter(isVisible => isVisible).length;
            }
        }));
    });
</script>
@endpush
</x-app-layout>