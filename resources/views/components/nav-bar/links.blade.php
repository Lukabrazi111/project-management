<div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
    <div class="flex flex-shrink-0 items-center">
        <img class="h-8 w-auto"
             src="https://merakiui.com/images/logo.svg"
             alt="Your Company">
    </div>
    <div class="ml-6 block">
        <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            <a href="{{ route('dashboard') }}"
               class="{{ setActiveClass(route('dashboard')) }} rounded-md px-3 py-2 text-sm font-medium"
               aria-current="page">Dashboard</a>
            <a href="{{ route('projects') }}"
               class="{{ setActiveClass(route('projects')) }} rounded-md px-3 py-2 text-sm font-medium">Projects</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">All
                Tasks</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Users</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">My
                Tasks</a>
        </div>
    </div>
</div>
