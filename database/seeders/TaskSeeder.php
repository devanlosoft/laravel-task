<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tasks = new Task();
        $tasks->title = "Task 1";
        $tasks->description = "Description 1";
        $tasks->user_id = User::find(1)->id;
        $tasks->save();
    }
}
