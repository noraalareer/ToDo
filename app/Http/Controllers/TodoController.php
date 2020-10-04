<?php

namespace App\Http\Controllers;
use App\Models\todo;

use Illuminate\Http\Request;

use App\Http\Requests\TodoCreateRequest;
class TodoController extends Controller
{
function __construct(){
    $this->middleware('auth');
}

    function index() {
        $todos=auth()->user()->todos()->orderBy('completed')->get();
      
        return view('todos.index',compact('todos'));
    }
    
    function create() {
        return view('todos.create');
    }
    function edit(Todo $todo) {

        return view('todos.edit',compact('todo'));
    }

    public function store(TodoCreateRequest $request) {
        
     auth()->User()->todos()->create($request->all());
      return redirect(route('todo.index'))->with('message','Todo Created Successfully');
    }

    public function update(TodoCreateRequest $request,Todo $todo){
      $todo->update(['title'=>$request->title]);
      return redirect(route('todo.index'))->with('message','Updated!!');
    }
    public function complete(Todo $todo){
        $todo->update(['completed'=> true]);
        return redirect()->back()->with('message','Great!you are complete the task :)');
    }
    
    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->back()->with('message','task deleted!');
    }   
}
