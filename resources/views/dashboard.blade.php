<x-layout>
    <x-dashboard.page-title title="Dashboard"/>

    <x-container>
        <x-dashboard.status-tasks :totalPendingTasks="$totalPendingTasks"
                                  :userPendingTasks="$userPendingTasks"
                                  :totalInProgressTasks="$totalInProgressTasks"
                                  :userInProgressTasks="$userInProgressTasks"
                                  :totalCompletedTasks="$totalCompletedTasks"
                                  :userCompletedTasks="$userCompletedTasks"
        />

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
                                <th scope="col" class="px-6 py-4 uppercase">Task</th>
                                <th scope="col" class="px-6 py-4 uppercase">Status</th>
                                <th scope="col" class="px-6 py-4 uppercase">Due Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasksWithProject as $task)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $task->id }}</td>
                                    <td class="px-6 py-4"><a
                                            href="#"
                                            class="text-blue-600 underline">{{ $task->project->name }}</a>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="#"
                                                                               class="text-blue-600 underline">{{ $task->name }}</a>
                                    </td>
                                    <td class="rounded-md whitespace-nowrap px-1 py-2 font-medium text-center {{ config('taskstatuses.' . $task->status)['class'] }}">
                                        {{ config('taskstatuses.' . $task->status)['text'] }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $task->due_date }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center mt-3 mb-10">
            {{ $tasksWithProject->links() }}
        </div>
    </x-container>
</x-layout>
