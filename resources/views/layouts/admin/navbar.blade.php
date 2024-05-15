<nav id="topbar" class="topbar border-b   fixed inset-x-0  duration-300
             block print:hidden z-50">
    <div
        class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
        <div class="ltr:mx-2  rtl:mx-2">
            <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                <!-- <i class="ti ti-chevrons-left text-3xl  top-icon"></i> -->
                <i data-lucide="menu" class="top-icon w-5 h-5"></i>
            </button>
        </div>

        <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
            <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                <button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false"
                    data-fc-autoclose="both" data-fc-type="dropdown">
                    <span data-lucide="search" class="top-icon w-5 h-5"></span>
                </button>

                <div class="left-auto right-0 z-50 my-1 hidden min-w-[300px]
                    list-none divide-y  divide-gray-100 rounded-md border-slate-700
                    md:border-white text-base shadow bg-white
                   "
                    onclick="event.stopPropagation()">
                    <div class="relative">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center
                        pl-3">
                            <i class="ti ti-search text-gray-400 z-10"></i>
                        </div>
                        <input type="text" id="email-adress-icon"
                            class="block w-full rounded-lg border border-slate-200 bg-slate-200/10 p-1.5
                        pl-10 text-slate-600 outline-none focus:border-slate-300
                        focus:ring-slate-300 sm:text-sm"
                            placeholder="Search..." />
                    </div>
                </div>
            </div>
            <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">

                <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                    <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                    <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                </button>
            </div>
            <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications"
                    aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                    <span data-lucide="bell" class="top-icon w-5 h-5"></span>
                </button>

                <div class="left-auto right-0 z-50 my-1 hidden w-64
                    list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10
                   text-base shadow bg-white
                   "
                    id="navNotifications" data-simplebar>
                    <ul class="py-1" aria-labelledby="navNotifications">
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex">
                                    <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                        <span data-lucide="shopping-cart"
                                            class="w-4 h-4 inline-block text-primary-500 self-center mx-auto"></span>
                                    </div>
                                    <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                        <p
                                            class="text-sm font-medium text-gray-900 truncate
                               ">
                                            Karen Robinson</p>
                                        <p class="text-gray-500 mb-0 text-xs truncate
                               ">
                                            Hey ! i'm available here
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                        src="design-system/assets/images/users/avatar-3.png') }}" alt="logo" />
                                    <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                        <p
                                            class="text-sm font-medium text-gray-900 truncate
                               ">
                                            Your order is placed</p>
                                        <p class="text-gray-500 mb-0 text-xs truncate
                               ">
                                            Dummy text of the printing and industry.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex">
                                    <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                        <span data-lucide="user"
                                            class="w-4 h-4 inline-block text-primary-500 self-center mx-auto"></span>
                                    </div>
                                    <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                        <p
                                            class="text-sm font-medium text-gray-900 truncate
                               ">
                                            Robert McCray</p>
                                        <p class="text-gray-500 mb-0 text-xs truncate
                               ">
                                            Good Morning!
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                        src="design-system/assets/images/users/avatar-9.png') }}" alt="logo" />
                                    <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                        <p
                                            class="text-sm font-medium  text-gray-900 truncate
                               ">
                                            Meeting with designers</p>
                                        <p class="text-gray-500 mb-0 text-xs truncate
                               ">
                                            It is a long established fact that a reader.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="me-2  dropdown relative">
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 md:me-0"
                    id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                    <img class="h-8 w-8 rounded-full" src="design-system/assets/images/users/avatar-1.png') }}"
                        alt="user photo" />
                    <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                        <span class="block font-medium text-slate-600">Maria Gibson</span>
                        <span class="-mt-0.5 block text-xs text-slate-500">Admin</span>
                    </span>
                </button>

                <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow bg-white w-40"
                    id="navUserdata">

                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50

                         ">
                                <span data-lucide="user" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50

                         ">
                                <span data-lucide="settings" class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50

                         ">
                                <span data-lucide="dollar-sign"
                                    class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Earnings</a>
                        </li>
                        <li>
                            <a href="auth-lockscreen.html"
                                class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600

                         ">
                                <span data-lucide="power" class="w-4 h-4 inline-block text-red-500 me-2"></span>
                                Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>