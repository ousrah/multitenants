<!-- resources/views/themes/modern-tech/components/main-sidebar.blade.php -->

<!-- Le fond semi-transparent sur mobile -->
<div x-show="isSidebarOpen" @click="toggleSidebar()"
     class="fixed inset-0 bg-black/50 z-20 md:hidden"
     x-transition:enter="transition-opacity ease-in-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:leave="transition-opacity ease-in-out duration-300"
     x-transition:leave-end="opacity-0">
</div>

<!-- La sidebar elle-même -->
@php $isRtl = session('direction') === 'rtl'; @endphp

<aside
    class="fixed inset-y-0 {{ $isRtl ? 'right-0' : 'left-0' }} bg-white dark:bg-slate-800 w-64 z-30 transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0 border-r border-slate-200 dark:border-slate-700"
    :class="isSidebarOpen ? 'translate-x-0' : '-translate-x-full {{ $isRtl ? 'translate-x-full' : '' }}'">
    
    <div class="flex items-center justify-center p-4 border-b border-slate-200 dark:border-slate-700">
        <a href="/">
            <!-- TITRE AVEC DÉGRADÉ -->
            <h1 class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                Mon App
            </h1>
        </a>
    </div>

    <nav class="p-4">
        <!-- MENU AMÉLIORÉ -->
        <ul class="space-y-2">
            <li>
                <!-- Exemple d'un lien actif -->
                <a href="#" class="flex items-center p-2 rounded-lg font-semibold text-white bg-gradient-to-r from-primary to-secondary shadow-md shadow-primary/40">
                    Tableau de bord
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                    Utilisateurs
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                    Paramètres
                </a>
            </li>
        </ul>
    </nav>
</aside>