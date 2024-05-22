<div
    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

    <!-- Profile dropdown -->
    <div class="relative ml-3">
        <div>
            <button type="button"
                    class="relative flex rounded-full bg-gray-800 text-sm"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5" id="menu-span"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
            </button>
        </div>

        <div
            id="user-menu"
            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
            tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 rounded-t-md"
               role="menuitem" tabindex="-1"
               id="user-menu-item">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
               role="menuitem" tabindex="-1"
               id="user-menu-item">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 rounded-b-md"
               role="menuitem" tabindex="-1"
               id="user-menu-item">Sign out</a>
        </div>
    </div>
</div>
