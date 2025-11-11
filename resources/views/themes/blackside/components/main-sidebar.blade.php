     <aside 
                :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" 
                class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 bg-secondary overflow-y-auto lg:translate-x-0 lg:inset-0 custom-scrollbar"
            >
                <!-- start::Logo -->
                <div class="flex items-center justify-center bg-black bg-opacity-30 h-16">
                    <h1 class="text-gray-100 text-lg font-bold uppercase tracking-widest">
                        Template
                    </h1>
                </div>
                <!-- end::Logo -->

                <!-- start::Navigation -->
                <nav class="py-10 ">
                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./index.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Dashboard
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Apps</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <span class="ml-3">Email</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/email/inbox.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Inbox</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/email/viewMessage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">View Message</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/email/newMessage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Compose</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="ml-3">E-Commerce</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ecommerce/products.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Products</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ecommerce/productDetails.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Product Details</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ecommerce/shoppingCart.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Shopping Cart</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ecommerce/checkout.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Checkout</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/messages.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Messages
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/calendar.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Calendar
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Components</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">User Interface</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/accordions.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/alerts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/badges.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Badges</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/breadcrumbs.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Breadcrumbs</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/buttons.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Buttons</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/cards.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Cards</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/count_up.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Count Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/dropdowns.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Dropdowns</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/pagination.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Pagination</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/tabs.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Tabs</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/ui/tooltips.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Tooltips</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                  </svg>
                                <span class="ml-3">Forms</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/layout.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Layout</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/input.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Input</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/checkbox.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Checkbox</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/radio.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Radio</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/textarea.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Textarea</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/switch.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Switch</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/forms/select.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Select</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                <span class="ml-3">Charts</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/charts/bar_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Bar Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/charts/line_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Line Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/charts/other_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Other Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/colors.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Colors
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/maps.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Maps
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                </svg>
                                <span class="ml-3">Modals</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/modals/info.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Info</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/modals/confirmation.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Confirmation</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/modals/authentication.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Authentication</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/tables.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Tables
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Pages</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                <span class="ml-3">Generic</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/generic/emptyPage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Empty Page</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="ml-3">Authentication</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Basic</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/basic/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/basic/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/basic/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/basic/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/basic/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Illustration</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/illustration/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/illustration/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/illustration/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/illustration/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/illustration/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Cover</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/cover/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/cover/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/cover/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/cover/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/authentication/cover/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/profile.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Profile
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/invoices.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Invoices
                        </span>
                    </a>
                    <!-- end::Menu link -->
                    
                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-3">Errors</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">404</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/404/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/404/illustration.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/404/illustration_cover.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration Cover</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">500</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/500/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/500/illustration.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/error/500/illustration_cover.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration Cover</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/maintenance.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Maintenance
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-3">FAQ</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/faq/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/faq/qa.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Q & A</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/faq/accordion.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordion</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                <span class="ml-3">Coming Soon</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/coming_soon/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./pages/coming_soon/timer.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Timer</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/pricing.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Pricing
                        </span>
                    </a>
                    <!-- end::Menu link -->
                </nav>
                <!-- end::Navigation -->
            </aside>