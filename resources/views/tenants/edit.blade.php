<x-app-layout title="Modifier le Tenant">
    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-200">
                        Modifier le tenant : {{ $tenant->name }}
                    </h2>

                    <form action="{{ route('tenants.update', $tenant) }}" method="POST" class="mt-8">
                        @csrf
                        @method('PUT')
                        @include('tenants._form', ['tenant' => $tenant])

                        <div class="flex items-center justify-end space-x-4 mt-8">
                            <a href="{{ route('tenants.index') }}" class="btn bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-white">Annuler</a>
                            <button type="submit" class="btn bg-primary text-white">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


