<div class="navbar text-second-100 px-10">
    <div class="flex-1 pl-10">
        <a class="normal-case text-xl" href="/">GALERI NUSANTARA</a>
    </div>
	<div class="flex-1 flex justify-between">
        <ul class="menu menu-horizontal px-1 uppercase">
            <li><a href="/" class="basis-8">Home</a></li>
            <li><a href="/provinsi" class="basis-8">Provinsi</a></li>
        </ul>
    </div>
    <div class="flex items-center md:order-2">
        <p class="mr-2 cursor-pointer">
            {{ auth()->user()->name }}
        </p>
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="{{ asset("images/default-profile.png") }}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
            <div class="px-4 py-3">
            <span class="flex text-sm text-gray-900 icon-container relative group">{{ auth()->user()->name }}
                <img src="{{ asset("/images/admin.png") }}" alt="admin icon" class="w-3 h-3 ml-1 cursor-pointer">
                <span class="info opacity-0 group-hover:opacity-100 absolute top-0 left-24 ml-2 transition-opacity duration-300 bg-first-100 text-xs text-white text-center">Admin</span>
            </span>
            <span class="block text-sm  text-gray-500 truncate">{{ auth()->user()->email }}</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                </li>
                <li>
                    <a href="/blog/create" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Buat Blog</a>
                </li>
                <li>
                    <a href="/provinsi/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Admin</a>
                </li>
                <li class="border-t hover:bg-gray-100">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 ">
                            Sign Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
</div>

