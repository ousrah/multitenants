<!-- resources/views/themes/modern-tech/components/header.blade.php -->

<header class="sticky top-0 z-10 border-b 
    border-slate-200/60 dark:border-slate-700/60
    bg-slate-50/60 dark:bg-slate-900/60
    backdrop-blur-sm"
>
    <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
        <!-- Bouton menu pour mobile -->
        <button @click="toggleSidebar()" class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>

        <div class="flex-1"></div>

        <!-- Icônes de droite -->
        <div class="flex items-center space-x-2 rtl:space-x-reverse">

            <!-- Language Switcher -->
            <x-theme::language-switcher />

            <!-- Notifications (le contenu ne change pas, juste le style du survol) -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="p-2 rounded-full hover:bg-slate-200/60 dark:hover:bg-slate-700/60">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                </button>
                <div x-show="open" @click.away="open = false"
                     class="absolute top-full right-0 mt-2 w-80 bg-white dark:bg-slate-800 rounded-lg shadow-lg border dark:border-slate-700
                            rtl:right-auto rtl:left-0"
                     x-transition>
                    <div class="p-4 font-bold border-b dark:border-slate-700">Notifications</div>
                    <div class="p-4">Aucune nouvelle notification.</div>
                </div>
            </div>

            <!-- Dark Mode Toggle (le contenu ne change pas, juste le style du survol) -->
            <button @click="toggleDarkMode()" class="p-2 rounded-full hover:bg-slate-200/60 dark:hover:bg-slate-700/60">
                <svg x-show="!isDarkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                <svg x-show="isDarkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
            </button>

            <!-- Profil -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open">
                    <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="User avatar">
                </button>
                <div x-show="open" @click.away="open = false"
                     class="absolute top-full right-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-lg shadow-lg border dark:border-slate-700
                            rtl:right-auto rtl:left-0"
                     x-transition>
                    <a href="#" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-700">Mon profil</a>
                    <form method="POST" action="{{ tenant() ? route('logout') : route('logoutadmin')  }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-700">
                            @lang("Déconnexion")
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>