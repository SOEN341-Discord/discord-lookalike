<nav x-data="{ open: false }" class="bg-white border-r border-gray-100 fixed inset-y-0 left-0 w-64 h-screen overflow-y-auto">
    <div class="flex flex-col bg-gray-800 text-white h-full">
        <!-- Logo -->
        <div class="flex p-4">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="h-9 w-auto fill-current text-white" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col justify-between">
            <div class="space-y-2">
                <!-- Server Link -->
                <x-nav-link :href="route('server')" :active="request()->routeIs('server')" class="block p-4 hover:bg-white-700 focus:outline-none">
                    {{ __('Server') }}
                </x-nav-link>
                <!-- Private Messages Link -->
                <x-nav-link :href="route('private_messages')" :active="request()->routeIs('private_messages')" class="block p-4 hover:bg-white-700 focus:outline-none">
                    {{ __('Private Messages') }}
                </x-nav-link>
            </div>

            <!-- Profile Dropdown -->
            <div class="p-4">
                <x-dropdown align="bottom" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 bg-gray-800 hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

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
        </div>
    </div>
</nav>
