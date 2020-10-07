<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Storage;

class UserController extends Controller
{
    //
    public function uploadAvatar(Request $request)
    {
    	# code...
    	if ($request->hasFile('image')) {
    		# code...
    		User::uploadAvatar($request->image);
    		//$request->session()->flash('message','Image Uploaded.');
    		return redirect()->back()->with('message','Image Uploaded.');
    	}
    	//$request->session()->flash('error','Image Not Uploaded.');
		return redirect()->back()->with('error','Image Not Uploaded.');
    }
    public function index()
    {
    	# code...
    	$user=new User();
    	$data=[
    		'name'=>'Vinayak',
    		'email'=>'vinayakgodse9732@gmail.com',
    		'password'=>'123',
    	];
    		// User::create($data);
    	//dd($user);
    	// $user->name='vinayak';
    	// $user->email='vinayakgodse97@gmail.com';
    	// $user->password=bcrypt('123');
    	// $user->save();
    	 $user=User::all();
    	 return $user;
    	// User::where('id',2)->delete();
    	//User::where('id',3)->update(['name'=>'vicky']);
		// DB::insert('insert into users (name,email,password)values(?,?,?)',['vinayak','vinayakgodse97@gmail.com','password']);    
		// $users=DB::select('select * from users');
		// return $users;
		// DB::update('update users set name=? where id=1',['Vicky']);
		// $users=DB::select('select * from users');
		// return $users;
		// DB::delete('delete from users where id=1');
		// $users=DB::select('select * from users');
		// return $users;
    	return view('home');
    }
    
}
