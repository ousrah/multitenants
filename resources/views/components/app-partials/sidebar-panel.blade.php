<div class="sidebar-panel">
    <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
        <!-- Sidebar Panel Header -->
        <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
            <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">
                {{ $sidebarMenu['title'] }}
            </p>
            <button @click="$store.global.isSidebarExpanded = false"
                class="btn size-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Panel Body -->
        <div class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" x-data="{ expandedItem: null }" x-init="$el._x_simplebar = new SimpleBar($el);">
            @foreach ($sidebarMenu['items'] as $key => $menuItems)
                @if ($key > 0)
                    <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                @endif
                <ul class="flex flex-1 flex-col px-4 font-inter">
                    @foreach ($menuItems as $keyMenu => $menu)
                        @if (isset($menu['submenu']))
                            <li x-data="accordionItem('{{ $keyMenu }}')">
                                <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' :
                                    'text-slate-600 dark:text-navy-200'"
                                    @click="expanded = !expanded"
                                    class="flex items-center justify-between py-2 text-xs-plus tracking-wide  outline-hidden transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800  dark:hover:text-navy-50"
                                    href="javascript:void(0);">
                                    <span>{{ $menu['title'] }}</span>
                                    <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <ul x-collapse x-show="expanded">
                                    @foreach ($menu['submenu'] as $keyMenu => $submenu)
                                        <li
                                            @if ($submenu['route_name'] === $pageName) x-init="$el.scrollIntoView({block:'center'}); expanded = true" @endif>
                                            <a href="{{ route($submenu['route_name']) }}"
                                                class="flex items-center justify-between p-2 text-xs-plus tracking-wide
                                                 outline-hidden transition-[color,padding-left] duration-300 ease-in-out hover:pl-4
                                                 {{ $submenu['route_name'] === $pageName ? 'text-primary dark:text-accent-light font-medium' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50' }}">
                                                <div class="flex items-center space-x-2">
                                                    <div
                                                        class="size-1.5 rounded-full border border-current opacity-40">
                                                    </div>
                                                    <span>{{ $submenu['title'] }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li @if ($menu['route_name'] === $pageName) x-init="$el.scrollIntoView({block:'center'});" @endif>
                                <a href="{{ route($menu['route_name']) }}"
                                    class="flex text-xs-plus py-2  tracking-wide outline-hidden transition-colors duration-300 ease-in-out {{ $menu['route_name'] === $pageName ? 'text-primary dark:text-accent-light font-medium' : 'text-slate-600  hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50' }}">
                                    {{ $menu['title'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</div>
