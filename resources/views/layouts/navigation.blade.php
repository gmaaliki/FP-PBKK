<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex pt-5 w-full items-center">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-sixerr-logo class="h-10" />
                </a>
            </div>

            <!-- Search bar -->
            <div class="ml-5 w-4/5">
                @csrf
                <!-- routes to be added later -->
                <form action="" method="GET">
                    <x-text-input id="search_bar" name="search_bar" type="text" class="mt-1 block w-full" placeholder="What service are you looking for today?"/>
                </form>
            </div>
            
            <!-- Notification icon -->
            <div class="hidden sm:flex sm:items-center sm:ms-5">
                <x-dropdown align="right" width="80">
                    <x-slot name="trigger">
                        <x-notification-logo class="h-8 w-8 text-gray-800 dark:text-gray-200"/>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Message Icon -->
            <div class="hidden sm:flex sm:items-center sm:ms-5">
                <x-dropdown align="right" width="80">
                    <x-slot name="trigger">
                        <x-message-logo class="h-8 w-8 text-gray-800 dark:text-gray-200"/>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>



            <!-- Wishlist Icon -->
            <div class="hidden sm:flex sm:items-center sm:ms-5">
                <x-dropdown align="right" width="80">
                    <x-slot name="trigger">
                        <x-wishlist-logo class="h-8 w-8 text-gray-800 dark:text-gray-200"/>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.show')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Post a request')}}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        
    </div>

    <div class="flex mt-4 border-black border-2 ">
            <div class="flex mx-auto">

                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> -->
                

                <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                    <div class="group inline-block relative">
                        <x-nav-link>
                            {{ __('Graphics & Design') }}
                        </x-nav-link>
                        <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-r-0 space-y-1 py-4 px-3 rounded-l-sm group-hover:block w-60 h-150 left-0 mt-0">
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Logo & Brand Identity</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Logo Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Brand Style Guides</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Business Cards & Stationery</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Fonts & Typography</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Art & Illustration</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Illustration</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Children's Book Illustration</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Portraits & Caricatures</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Cartoons & Comics</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Pattern Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Tattoo Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Storyboards</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">NFT Art</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Miscellaneous</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Design Advice</a></li>
                            </ul>
                        </ul>   
                        <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 border-r-0 space-y-1 py-4 px-3 group-hover:block w-60 h-150 left-60 mt-0">
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Web & App Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Website Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">App Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">UX Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Landing Page Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Icon Design</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Product & Gaming</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Industrial & Product Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Character Modeling</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Game Art</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Graphics for Streamers</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Print Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Flyer Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Brochure Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Poster Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Catalog Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Menu Design</a></li>
                            </ul>
                        </ul>   
                        <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 border-r-0 space-y-1 py-4 px-3 group-hover:block w-60 h-150 ml-120 mt-0">
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Visual Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Image Editing</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Presentation Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Background Removal</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Infographic Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Vector Tracing</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Resume Design</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Marketing Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Social Media Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Social Posts & Banners</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Email Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Web Banners</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Signage Design</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Packaging & Covers</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Packaging & Label Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Book Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Book Covers</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Album Cover Design</a></li>
                            </ul>
                        </ul>   
                        <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 space-y-1 py-4 px-3 rounded-r-sm group-hover:block w-60 h-150 ml-180 mt-0">
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Architecture & Building Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Architecture & Interior Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Landscape Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Building Engineering</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Fashion & Merchandise</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">T-Shirts & Merchandise</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Fashion Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Jewelry Design</a></li>
                            </ul>
                            <ul>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">3D Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Architecture</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Industrial Design</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Fashion & Garment</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Printing Characters</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Landscape</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Game Art</a></li>
                                    <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Jewelry Design</a></li>
                            </ul>
                        </ul>  
                    </div>
                </div>

                    
                   
                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <div class="group inline-block relative">
                            <x-nav-link>
                                {{ __('Programming & Tech') }}
                            </x-nav-link>
                                <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-r-0 space-y-1 py-4 px-3 rounded-l-sm group-hover:block w-60 h-150 left-0 mt-0">
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Website Development</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">E-Commerce Development</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Landing Pages</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Blogs</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Website Platforms</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">WordPress</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Shopify</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Wix</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Custom Websites</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">GoDaddy</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Website Maintenance</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Website Customization</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Bug Fixes</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Backup & Migration</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Speed Optimization</a></li>
                                </ul>
                            </ul>   
                            <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 border-r-0 space-y-1 py-4 px-3 group-hover:block w-60 h-150 left-60 mt-0">
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Software Development</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Website Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">App Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">UX Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Landing Page Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Icon Design</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Product & Gaming</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Industrial & Product Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Character Modeling</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Game Art</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Graphics for Streamers</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Print Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Flyer Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Brochure Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Poster Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Catalog Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Menu Design</a></li>
                                </ul>
                            </ul>   
                            <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 border-r-0 space-y-1 py-4 px-3 group-hover:block w-60 h-150 ml-120 mt-0">
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Visual Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Image Editing</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Presentation Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Background Removal</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Infographic Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Vector Tracing</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Resume Design</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Marketing Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Social Media Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Social Posts & Banners</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Email Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Web Banners</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Signage Design</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Packaging & Covers</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Packaging & Label Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Book Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Book Covers</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Album Cover Design</a></li>
                                </ul>
                            </ul>   
                            <ul class="absolute hidden text-gray-800 bg-white border border-gray-300 border-l-0 space-y-1 py-4 px-3 rounded-r-sm group-hover:block w-60 h-150 ml-180 mt-0">
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Architecture & Building Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Architecture & Interior Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Landscape Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Building Engineering</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">Fashion & Merchandise</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">T-Shirts & Merchandise</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Fashion Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">Jewelry Design</a></li>
                                </ul>
                                <ul>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extrabold">3D Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Architecture</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Industrial Design</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Fashion & Garment</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Printing Characters</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Landscape</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Game Art</a></li>
                                        <li><a href="#" class="block px-2 py-1 hover:bg-gray-200 font-extralight">3D Jewelry Design</a></li>
                                </ul>
                            </ul>  
                        </div>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Digital Marketing') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Video & Animation') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Writing & Translation') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Music & Audio') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Business') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Data') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('Photography') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
                        <x-nav-link>
                            {{ __('AI Services') }}
                        </x-nav-link>
                    </div>              
            </div>
        </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
