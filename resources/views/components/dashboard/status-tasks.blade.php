<div class="grid grid-cols-3 mt-10 gap-2">
    <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
        <h1 class="font-medium text-yellow-500 text-xl">Pending Tasks</h1>
        <p class="text-white font-medium">{{ $userPendingTasks }} / {{ $totalPendingTasks }}</p>
    </div>
    <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
        <h1 class="font-medium text-blue-500 text-xl">In Progress Tasks</h1>
        <p class="text-white font-medium">{{ $userInProgressTasks }} / {{ $totalInProgressTasks }}</p>
    </div>
    <div class="bg-gray-800 flex flex-col justify-start space-y-2 px-4 py-3 rounded-lg">
        <h1 class="font-medium text-green-500 text-xl">Completed Tasks</h1>
        <p class="text-white font-medium">{{ $userCompletedTasks }} / {{ $totalCompletedTasks }}</p>
    </div>
</div>
