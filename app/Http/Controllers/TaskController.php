<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(Request $request){
        return view('task');
    }

    public function create(Request $request){
        $categories = Category::all();
        return view('tasks.create', ['categories' => $categories]);
    }
    public function create_action(Request $request){
        $task = $request->only(['title','due_date','category_id','description','user_id']);
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }


    public function edit(Request $request){
        $task = Task::find($request->id);
        if (!$task) {
            $id = 1;
            return redirect(route('home'));
        }
        $data['editTask'] = $task;
        $data['categories'] = Category::all();

        return view('tasks.edit', $data);
    }
    public function edit_action(Request $request){
        $request_data = $request->only(['title','due_date','category_id','description']);
        $task = Task::find($request->id);
        if (!$task) {
            $id = 1;
            return 'Erro: Tarefa não encontrada!';
        }

        $task->update($request_data);
        $task->save();

        return redirect(route('home'));
    }

    public function delete(Request $request){
        // Deleta a tarefa e volta para a Home
        return redirect(route('home'));
    }
}
