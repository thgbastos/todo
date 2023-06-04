<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::create([
            'title' => 'Minha primeira tarefa',
            'due_date' => '2023-06-06 10:00:00',
            'description' => 'Descrição da minha primeira tarefa',
            'user_id' => '1',
            'category_id' => '1'
        ]);
    }
}
