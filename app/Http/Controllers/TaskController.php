<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    //
    public function index(){
        
        return view('task.index');
    }

    public function store(Request $request){
        //this means die and dump
      //dd($request->all());

      //Validation
      $request->validate([
          'title' => 'required'
      ]);

      //dd($request->task);

      Task::create([
       'title' => $request->task
      ]);

      session()->flash('msg', 'Task has been created');

      return redirect('/');


    }
}
