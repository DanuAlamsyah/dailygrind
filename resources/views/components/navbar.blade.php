    <nav class="bg-gray-800" x-data="{ open: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
            <div class="shrink-0">
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                <x-nav-link href="/" :current="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/posts" :current="request()->is('posts')">Blog</x-nav-link>
                <x-nav-link href="/about" :current="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :current="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>
            </div>
            <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <details>
                        <summary class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 cursor-pointer list-none">
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </summary>
                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </details>
                </div>
            </div>
            </div>
            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
            <button @click="open = !open" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg x-show="!open" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="block size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-show="open" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="block size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
        </div>
        </div>

        <div x-show="open" x-cloak class="md:hidden" id="mobile-menu">
            <div class="flex flex-col gap-1 px-2 pt-2 pb-3 sm:px-3">
                <x-nav-link href="/" :current="request()->is('/')" class="block w-full text-left text-base font-medium">Home</x-nav-link>
                <x-nav-link href="/posts" :current="request()->is('posts')" class="block w-full text-left text-base font-medium">Blog</x-nav-link>
                <x-nav-link href="/about" :current="request()->is('about')" class="block w-full text-left text-base font-medium">About</x-nav-link>
                <x-nav-link href="/contact" :current="request()->is('contact')" class="block w-full text-left text-base font-medium">Contact</x-nav-link>
            </div>
            <div class="border-t border-gray-700 pt-4 pb-3">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full" />
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">Tom</div>
                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
            </div>
            </div>
        </div>
    </nav>