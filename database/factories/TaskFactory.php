<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $user = User::all()->random(); 

        //Para os casos de um usuário não ter categoria, executa o WHILE até encontrar um que tenha
        while (count($user->categories) == 0){
            $user = User::all()->random(); 
        }

        return [
            'is_done' => fake()->boolean(),
            'title' => fake()->text(30),
            'due_date' => fake()->dateTime(),
            'description' => fake()->text(80),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
