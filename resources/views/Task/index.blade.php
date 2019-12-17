
@extends('layouts.master')

@section('content')


  <div class="row mt-5">
    <div class="col-md-6">

      <!--@if ($errors->any())
        @foreach( $errors->all() as $error )
         <div class="alert alert-danger">
            {{$error}}
         </div>
        @endforeach
      @endif-->

      @if(session()->has('msg'))

       <div class="alert alert-success">
       {{ session()->get('msg')}}
       </div>
      @endif
      <div class="card">
        <div class="card-header">
           Add Task
        </div>
         <div class="card-body">
            <form action="{{ route('task.create')}}" method="post" novalidate >
             @csrf

              <div class="form-group">
                <label for="task">Task</label>
                <input type="text" name="task" id="task" placehoder="Task" class="form-control">
                <div class="invalid-feedback">
          Please choose a username.
        </div>
              </div>

              <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Submit">
              </div>
              
            </form>
         </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
           View Tasks
        </div>
         <div class="card-body">
            <table class="table table-bordered">
             <tr>
                <th>Task</th>
                <th>Action</th>
             </tr>

             <tr>
              <td>Task</td>
              <td><button class="btn btn-danger btn-sm">Delete</button></td>
             </tr>

            </table>
         </div>
      </div>
    </div>
  </div>

@endsection
