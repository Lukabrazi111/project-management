<x-layout>
    <x-dashboard.page-title title="Dashboard"/>

    <div class="absolute w-full h-screen bg-gray-900">
        <x-container>
            <x-dashboard.status-tasks/>

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
