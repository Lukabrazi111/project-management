<x-layout>
    <x-dashboard.page-title title="Projects" button="Add new"/>
    <x-container>
        <div class="flex flex-col bg-gray-800 mt-6 rounded-md">
            <div class="sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table
                            class="min-w-full text-left text-sm font-normal text-gray-300">
                            <thead
                                class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr>
                                <th scope="col" class="px-6 py-4 uppercase">
                                    <a href="?sort=id">ID</a>
                                </th>
                                <th scope="col" class="px-6 py-4 uppercase">Image</th>
                                <th scope="col" class="px-6 py-4 uppercase">
                                    <a href="#">Name</a>
                                </th>
                                {{-- todo: add other filter underneath --}}
                                <th scope="col" class="px-6 py-4 uppercase">Status</th>
                                <th scope="col" class="whitespace-nowrap px-6 py-4 uppercase">Create Date</th>
                                <th scope="col" class="whitespace-nowrap px-6 py-4 uppercase">Due Date</th>
                                <th scope="col" class="whitespace-nowrap px-6 py-4 uppercase">Created By</th>
                                <th scope="col" class="px-6 py-4 uppercase">Actions</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $project->id }}</td>
                                    <td class="w-32 h-auto px-6 py-4"><img src="{{ $project->image }}" alt="image"></td>
                                    <td class="px-6 py-4">{{ $project->name }}</td>
                                    <td class="rounded-md whitespace-nowrap px-1 py-2 font-medium text-center {{ config('taskstatuses.' . $project->status)['class'] }}">{{ config('taskstatuses.' . $project->status)['text'] }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date('Y-m-d', strtotime($project->created_at)) }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $project->due_date }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $project->createdBy->username }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="#" class="text-blue-600 font-medium hover:underline">Edit</a>
                                            <a href="#" class="text-red-600 font-medium hover:underline">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- todo: create component for pagination links --}}
        <div class="flex justify-center items-center mt-3 mb-10">
            {{ $projects->links() }}
        </div>
    </x-container>
</x-layout>
