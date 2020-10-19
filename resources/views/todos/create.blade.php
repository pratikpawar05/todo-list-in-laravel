<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<div class="text-center pt-10"> 
		<h1 class="text-2xl">what next you To-Do</h1>
		<x-alert />
<form method="post" action="/todos/create" class="py-5">
	@csrf
	<input type="text" name="title" class="py-2 px-2 border" />
	<input type="submit" value="Create" class="p-2 border rounded">
</form>
</div>
</body>
</html>