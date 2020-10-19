@extends('todos.layout')
@section('content')
<h1 class="text-2xl border-b pb-4">what next you To-Do</h1>
		<x-alert />
<form method="post" action="/todos/create" class="py-5">
	@csrf
	<input type="text" name="title" class="py-2 px-2 border" />
	<input type="submit" value="Create" class="p-2 border rounded">
</form>
<a href="/todos" class="py-2 px-4 ml-2 bg-black cursor-pointer rounded text-white">Back</a>
@endsection

