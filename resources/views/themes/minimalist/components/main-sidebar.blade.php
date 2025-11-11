<!-- components/main-sidebar.blade.php -->

<!-- Le fond semi-transparent sur mobile (pas de changement ici) -->
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
    class="fixed inset-y-0 {{ $isRtl ? 'right-0 left-auto' : 'left-0' }} bg-white dark:bg-slate-800 w-64 z-30 transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0"
    :class="isSidebarOpen ? 'translate-x-0' : '-translate-x-full {{ $isRtl ? 'translate-x-full' : '' }}'">
    <div class="flex items-center justify-center p-4 border-b border-slate-200 dark:border-slate-700">
        <a href="/">
            <h1 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">Mon App</h1>
        </a>
    </div>

    <nav class="p-4">
        <ul>
            <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">Tableau de bord</a></li>
            <li>
                           <a href="tenants" x-tooltip.placement.right="'Utilisateurs'" class="flex w-9 h-9 size-11 items-center justify-center rounded-lg hover:bg-primary/10 hover:text-primary dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-500 ease-in-out hover:rotate-[360deg] text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </a>  </li>
            <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">Paramètres</a></li>
        </ul>
    </nav>
</aside>