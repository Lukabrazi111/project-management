<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected array|string $randomStatus = ['pending', 'in_progress', 'completed'];
    protected array|string $randomPriority = ['low', 'medium', 'high'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectIds = Project::all()->pluck('id')->toArray();

        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'status' => $this->randomStatus[rand(0, count($this->randomStatus) - 1)],
            'priority' => $this->randomPriority[rand(0, count($this->randomPriority) - 1)],
            'due_date' => now()->addDays(rand(1, 5)),
            'project_id' => $projectIds[array_rand($projectIds)],
            'assigned_user_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
