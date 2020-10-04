@extends('todos.layout')
@extends('layouts.app')
@section('content')
    <h1 class="text-2xl border-b pb-4">add To-Do</h1>
    <x-alert />
    <form method="post" action="/todo/create" class="py-5 ">
       @csrf
        <input type="text" name="title" class="py-2 px-2 border rounded">
        <input type="submit" name="create" class="py-2 px-2 border rounded"> 
    </form>

    <a href="/todo" class="m-5 py-2 px-1 bg-white-400 border cursor-pointer rounded text-black">Back</a>
@endsection
   
        