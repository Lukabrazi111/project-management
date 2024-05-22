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
            <div class="grid grid-cols-3 mt-10 gap-2">
                <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
                    <h1 class="font-medium text-yellow-500 text-xl">Pending Tasks</h1>
                    <p class="text-white font-medium">145 / 293</p>
                </div>
                <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
                    <h1 class="font-medium text-blue-500 text-xl">In Progress Tasks</h1>
                    <p class="text-white font-medium">164 / 311</p>
                </div>
                <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
                    <h1 class="font-medium text-green-500 text-xl">Completed Tasks</h1>
                    <p class="text-white font-medium">146 / 296</p>
                </div>
            </div>

            <div class="flex flex-col bg-gray-800 mt-6 rounded-md">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="px-6 text-white font-medium text-xl mb-2">My Active Tasks</div>
                        <div class="overflow-hidden">
                            <table
                                class="min-w-full text-left text-sm font-normal text-gray-300">
                                <thead
                                    class="border-b border-neutral-200 font-medium dark:border-white/10">
                                <tr>
                                    <th scope="col" class="px-6 py-4 uppercase">ID</th>
                                    <th scope="col" class="px-6 py-4 uppercase">Project name</th>
                                    <th scope="col" class="px-6 py-4 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-4 uppercase">Status</th>
                                    <th scope="col" class="px-6 py-4 uppercase">Due Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                    <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                    <td class="whitespace-nowrap px-6 py-4">2025-04-05</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-container>


    </div>


</x-layout>
