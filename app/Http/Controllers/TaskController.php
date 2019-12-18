<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    //
    public function index(){

        $tasks = Task::all();
        
        
        
        return view('task.index', compact('tasks'));
    }

    public function store(Request $request){
        //this means die and dump
      //dd($request->all());

      //Validation
      $request->validate([
          'title' => 'required'
      ]);

      dd($request->title);

      //Storing in database
      Task::create([
          'title' => $request->title

      ]);

      session()->flash('msg','Task has been created');

      return redirect('/');

      


    }
}
