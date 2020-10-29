@extends('todos.layout')
@section('content')
<div class="flex justify-center border-b pb-4">
	<h1 class="text-2xl">All To-Do</h1>
<a href="/todos/create" class="py-2 ml-2 text-blue-300 cursor-pointer text-white"><span class="fas fa-plus-circle px-2"></a>
</div>
<x-alert />
		<ul class="my-5">
@foreach($todos as $todo)
<li class="flex justify-between my-5">
	@if($todo->completed)
<p class="line-through">{{$todo->title}}</p>
@else
<p >{{$todo->title}}</p>
@endif
<div>

	<a href="{{'/todos/'.$todo->id.'/edit'}}" class=" text-orange-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></span></a>
	@if($todo->completed)
	<span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()" class="fas fa-check text-green-400 px-2 cursor-pointer"></span>
	<form style="display: none;" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}"  >
		@csrf
		@method('put')
	</form>
	@else
	<span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check text-gray-400 cursor-pointer px-2"></span>
	<form style="display: none;" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}"  >
		@csrf
		@method('put')
	</form>
	@endif
</div>
</li>
 @endforeach
</ul>
@endsection

