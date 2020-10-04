@extends('todos.layout')
@extends('layouts.app')
@section('content')
<div class="flex justify-center border-b pb-4">
<h1 class="text-2xl"> All toyr ToDos</h1>
<a href="todo/create" class="mx-5 py-2 px-1 bg-blue-400 cursor-pointer rounded text-white">Create New </a>
</div>
<ul class="my-5">
    <x-alert />
   
@if($todos->count() > 0)
@foreach ($todos as $todo)
<li class="flex justify-between p-2">
 <div>
 @include('todos.completeBotton')
</div> 
@if($todo->completed)
<p class="line-through">{{$todo->title}}</p>
@else
<p>{{$todo->title}}</p>
@endif
<div>

<!--edit-->

 <a href="{{'todo/'.$todo->id.'/edit'}}" class="text-orange-400 cursor-pointer text-white" style="background-color:lightsalmon "><span class="fas fa-edit px-2" /></a>
 <!--end edit-->
 <!--complete-->

 <!--delete-->
 <span class="fas fa-trash px-2 text-red-600 cursor-pointer " onclick="event.preventDefault();
 if (confirm('Are you really want to delete ?')){
 document.getElementById('form-delete-{{$todo->id}}').submit()}"  />
<form style="display:none" method="post" id="{{'form-delete-'.$todo->id}}" action="{{route('todo.delete',$todo->id)}}">
    @csrf
    @method('delete')
</form>


</div>
</li>
@endforeach

@else
<p>There is no task, create one.</p>
@endif
</ul>
@endsection




   

