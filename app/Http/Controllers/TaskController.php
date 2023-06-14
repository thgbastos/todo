<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(Request $request){
        return view('task');
    }

    public function create(Request $request){
        return view('tasks.create');
    }

    public function edit(Request $request){
        return view('tasks.edit');
    }

    public function delete(Request $request){
        // Deleta a tarefa e volta para a Home
        return redirect(route('home'));
    }
}
