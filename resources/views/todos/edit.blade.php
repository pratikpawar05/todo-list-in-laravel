@extends('todos.layout')
@section('content')
	<h1 class="text-2xl border-b pb-4">Update the todos</h1>
<!-- 	<h2>{{$todo->title}}</h2>
 -->		<x-alert />
<form method="post" action="{{route('todo.update',$todo->id)}}" class="py-5">
	@csrf
	@method('patch')
	<input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border" />
	<input type="submit" value="Update" class="p-2 border rounded">
</form>
<a href="/todos" class="py-2 px-4 ml-2 bg-black cursor-pointer rounded text-white">Back</a>
@endsection