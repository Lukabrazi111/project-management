<?php

namespace App\Http\Controllers;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display login page view
     */
    public function index()
    {
        $user = Auth::user();

        // pending tasks
        $totalPendingTasks = $this->getTaskCount(TaskStatusEnum::PENDING);
        $userPendingTasks = $this->getTaskCount(TaskStatusEnum::PENDING, $user);

        // in progress tasks
        $totalInProgressTasks = $this->getTaskCount(TaskStatusEnum::IN_PROGRESS);
        $userInProgressTasks = $this->getTaskCount(TaskStatusEnum::IN_PROGRESS, $user);

        // completed tasks
        $totalCompletedTasks = $this->getTaskCount(TaskStatusEnum::COMPLETED);
        $userCompletedTasks = $this->getTaskCount(TaskStatusEnum::COMPLETED, $user);

        $tasksWithProject = Task::query()
            ->with('project')
            ->where("assigned_user_id", $user->id)
            ->paginate(10);

        return view('dashboard', compact(
            'totalPendingTasks',
            'userPendingTasks',
            'totalInProgressTasks',
            'userInProgressTasks',
            'totalCompletedTasks',
            'userCompletedTasks',
            'tasksWithProject',
        ));
    }

    /**
     * Get tasks count
     *
     * @param $status
     * @param $user
     * @return int
     */
    private function getTaskCount($status, $user = null)
    {
        $tasks = Task::query()->where('status', $status);

        if ($user) {
            $tasks->where('assigned_user_id', $user->id);
        }

        return $tasks->count();
    }
}
