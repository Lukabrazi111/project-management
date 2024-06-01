<?php

namespace App\Http\Controllers;

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
        $totalPendingTasks = $this->getTaskCount('pending');
        $userPendingTasks = $this->getTaskCount('pending', $user);

        // in progress tasks
        $totalInProgressTasks = $this->getTaskCount('in_progress');
        $userInProgressTasks = $this->getTaskCount('in_progress', $user);

        // completed tasks
        $totalCompletedTasks = $this->getTaskCount('completed');
        $userCompletedTasks = $this->getTaskCount('completed', $user);

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

    private function getTaskCount($status, $user = null)
    {
        $tasks = Task::query()->where('status', $status);

        if ($user) {
            $tasks->where('assigned_user_id', $user->id);
        }

        return $tasks->count();
    }
}
