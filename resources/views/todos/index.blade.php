@extends('todos.layout')
@section('content')
<div class="flex justify-center border-b pb-4">
	<h1 class="text-2xl">All To-Do</h1>
<a href="/todos/create" class="py-2 px-1 ml-2 bg-blue-300 cursor-pointer rounded text-white">Create New</a>
</div>
<x-alert />
		<ul class="my-5">
@foreach($todos as $todo)
<li class="flex justify-between my-5">
<p>{{$todo->title}}</p>

	<a href="{{'/todos/'.$todo->id.'/edit'}}" class="py-2 px-1 ml-2 bg-orange-400 cursor-pointer rounded text-white">Edit</a>

</li>
 @endforeach
</ul>
@endsection

