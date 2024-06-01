<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected array|string $randomStatus = ['pending', 'in_progress', 'completed'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
            'due_date' => now()->addDays(rand(1, 10)),
            'status' => $this->randomStatus[rand(0, count($this->randomStatus) - 1)],
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
