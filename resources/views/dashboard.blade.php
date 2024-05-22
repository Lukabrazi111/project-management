<x-layout>
    <!-- Main navigation container -->
    <nav class="bg-gray-800">
        <x-container>
            <div class="relative flex h-16 items-center justify-between">
                <x-nav-bar.links/>

                <x-nav-bar.profile/>
            </div>
        </x-container>

    </nav>

    <div class="bg-gray-800 border-t border-gray-600 py-4 px-8">
        <x-container>
            <h1 class="text-xl font-medium text-white">Dashboard</h1>
        </x-container>
    </div>

    <div class="absolute w-full h-screen bg-gray-900">
        <x-container>
            <x-dashboard.status-tasks/>

            <div class="flex flex-col bg-gray-800 mt-6 rounded-md">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="px-6 text-white font-medium text-xl mb-2">My Active Tasks</div>

                        <x-dashboard.tasks-table/>

                    </div>
                </div>
            </div>
        </x-container>
    </div>

</x-layout>
