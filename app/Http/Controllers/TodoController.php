<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;
use Storage;
use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$todos=Todo::all();
    	//return $todos;
    	//return view('todos.index')->with(['todos'=>$todos]);
    	return view('todos.index',compact('todos'));
    }

public function create()
    {
    	# code...
    	return view('todos.create');
    }

public function edit(Todo $todo)
    {
    	# code...
    	//$todo=Todo::find($id);
    	//dd($todo->title);
    	return view('todos.edit',compact('todo'));
    }
    public function store(TodoCreateRequest $request)
    {
    	# code...
    	//return view('todos.edit');
    	// if(!$request->title){
    	// 	return redirect()->back()->with('error','please input the title');
    	// } 
    	// $rules=[
    	// 	'title'=>'required|max:255'
    	// ];
    	// $masseges=[
    	// 	'title.max'=>'todo title should not be greater than 255 chars.',
    	// ];
    	// $validator= Validator::make($request->all(),$rules,$masseges);
    	// if ($validator->fails()) {
    	// 	# code...
    	// 	return redirect()->back()->withErrors($validator)->withInput();
    	// }
    	// $request->validate([
    	
    	// 	'title'=>'required|max:255',
    	// ]);
    	Todo::create($request->all());
    	return redirect()->back()->with('message','Todo Created Sucessfully');
    }
    public function update(TodoCreateRequest $request, Todo $todo)
    {
    		//update todo
		$todo->update(['title'=>$request->title]);
		return redirect(route('todo.index'))->with('message','Updated');
		    }
}