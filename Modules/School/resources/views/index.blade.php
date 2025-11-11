{{-- Fichier: Modules/School/resources/views/index.blade.php --}}

<x-app-layout title="Liste des Écoles" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div>
            <h1>Liste des Écoles</h1>

            {{-- Boucle sur les données passées par le contrôleur --}}
            @forelse($schools as $school)
                <p>
                    <strong>{{ $school->name }}</strong><br>
                    Adresse : {{ $school->address }}<br>
                    Téléphone : {{ $school->phone }}
                </p>
                <hr>
            @empty
                <p>Aucune école n'a été trouvée.</p>
            @endforelse

            {{-- Ajout des liens de pagination --}}
            <div class="mt-4">
                {{ $schools->links() }}
            </div>
        </div>
    </main>
</x-app-layout>