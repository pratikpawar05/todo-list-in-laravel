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
    	return view('todos.index');
    }

public function create()
    {
    	# code...
    	return view('todos.create');
    }

public function edit()
    {
    	# code...
    	return view('todos.edit');
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
}