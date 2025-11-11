{{-- _form.blade.php  --}}
@if ($errors->any())
    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- ID du Tenant (uniquement à la création) -->
    @unless(isset($tenant))
    <div class="md:col-span-2">
        <label for="id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID du Tenant</label>
        <input type="text" name="id" id="id" value="{{ old('id') }}"
               class="mt-1  p-2  block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
               placeholder="ex: acme, societex" required>
        <p class="mt-2 p-2  text-xs text-gray-500">Doit être unique, sans espaces ni caractères spéciaux (sauf tirets).</p>
    </div>
    @endunless

    <!-- Nom de l'entreprise (dans data) -->
    <div>
        <label for="data_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nom de l'entreprise</label>
        {{-- CORRECTION : On utilise isset($tenant) pour vérifier si la variable existe avant de l'utiliser --}}
        <input type="text" name="data[name]" id="data_name" value="{{ old('data.name', isset($tenant) ? $tenant->data['name'] ?? '' : '') }}"
               class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
    </div>

    <!-- Domaine principal -->
    <div>
        <label for="domain" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Domaine principal</label>
         {{-- CORRECTION : On utilise isset($tenant) pour vérifier si la variable existe avant de l'utiliser --}}
        <input type="text" name="domain" id="domain" value="{{ old('domain', isset($tenant) ? $tenant->domains->first()?->domain ?? '' : '') }}"
               class="mt-1 p-2  block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
               placeholder="ex: client.mondomaine.com" required>
    </div>

    <!-- Plan (dans data) -->
    <div class="md:col-span-2" hidden>
        <label for="data_plan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Plan (Optionnel)</label>
         {{-- CORRECTION : On utilise isset($tenant) pour vérifier si la variable existe avant de l'utiliser --}}
        <input type="text" name="data[plan]" id="data_plan" value="{{ old('data.plan', isset($tenant) ? $tenant->data['plan'] ?? '' : '') }}"
               class="mt-1  p-2  block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
               placeholder="ex: premium, basique">
    </div>
</div>