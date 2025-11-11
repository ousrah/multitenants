<!-- resources/views/themes/modern-tech/components/header.blade.php -->
         <header class="flex justify-between items-center h-16 py-4 px-6 bg-white">
                        <!-- start::Mobile menu button -->
                        <div class="flex items-center">
                            <button 
                                @click="menuOpen = true" 
                                class="text-gray-500 hover:text-primary focus:outline-none lg:hidden transition duration-200"
                            >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            </button>
                        </div>
                        <!-- end::Mobile menu button -->

                        <!-- start::Right side top menu -->
                        <div class="flex items-center">
                            <!-- start::Search input -->
                            <form class="relative">
                                <input 
                                    type="text" 
                                    placeholder="Search..."
                                    class="w-48 lg:w-72 bg-gray-200 text-sm py-2 pl-4 rounded-lg focus:ring-0 focus:outline-none"
                                >
                                <button class="absolute right-2 top-2.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </form>
                            <!-- end::Search input -->

                            <!-- start::Notifications -->
                            <div 
                            x-data="{ linkActive: false }"
                                class="relative mx-6"
                            >
                                <!-- start::Main link -->
                                <div 
                                    @click="linkActive = !linkActive"
                                    class="cursor-pointer flex"
                                >
                                    <svg class="w-6 h-6 cursor-pointer hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                    <sub>
                                        <span class="bg-red-600 text-gray-100 px-1.5 py-0.5 rounded-full -ml-1 animate-pulse">
                                            4
                                        </span>
                                    </sub>
                                </div>
                                <!-- end::Main link -->
                                
                                <!-- start::Submenu -->
                                <div 
                                    x-show="linkActive"
                                    @click.away="linkActive = false"
                                    x-cloak
                                    class="absolute right-0 w-96 top-11 border border-gray-300 z-10"
                                >
                                    <!-- start::Submenu content -->
                                    <div class="bg-white rounded max-h-96 overflow-y-scroll custom-scrollbar">
                                        <!-- start::Submenu header -->
                                        <div class="flex items-center justify-between px-4 py-2">
                                            <span class="font-bold">Notifications</span>
                                            <span class="text-xs px-1.5 py-0.5 bg-red-600 text-gray-100 rounded">
                                                4 new
                                            </span>
                                        </div>
                                        <hr>
                                        <!-- end::Submenu header -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                5 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                30 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                54 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                1 hour ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                15 hours ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                12 day ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                3 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                10 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Notifications -->

                            <!-- start::Profile -->
                            <div 
                                x-data="{ linkActive: false }"
                                class="relative"                      
                            >
                                <!-- start::Main link -->
                                <div 
                                    @click="linkActive = !linkActive"
                                    class="cursor-pointer"
                                >
                                    <img 
                                        src="./assets/img/profile.jpg"
                                        class="w-10 rounded-full"
                                    >
                                </div>
                                <!-- end::Main link -->
                                
                                <!-- start::Submenu -->
                                <div 
                                    x-show="linkActive"
                                    @click.away="linkActive = false"
                                    x-cloak
                                    class="absolute right-0 w-40 top-11 border border-gray-300 z-20"
                                >
                                    <!-- start::Submenu content -->
                                    <div class="bg-white rounded">
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./pages/profile.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Profile</p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./pages/email/inbox.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >
                                                        Inbox
                                                        <span class="bg-red-600 text-gray-100 text-xs px-1.5 py-0.5 ml-2 rounded">3</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./pages/settings.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Settings</p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        
                                        <hr>

                                        <!-- start::Submenu link -->
                                        <form
                                            method=""
                                            action=""
                                            x-data="{ linkHover: false }"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                                <button 
                                                    class="text-sm ml-3 text-gray-600 font-bold capitalize"
                                                    :class=" linkHover ? 'text-primary' : ''"
                                                >
                                                    Log out
                                                </button>
                                            </div>
                                        </form>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Profile -->
                        </div>
                        <!-- end::Right side top menu -->
                    </header>