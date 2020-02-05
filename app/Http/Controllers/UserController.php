<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class UserController extends Controller
{
    public function index()
    {
    	//using query builder
    	
    	// $user = DB::table('users')
    	// ->join('phones','users.id','=','phones.user_id')
    	// ->select('users.*','phones.phone')
    	// ->get();

    	//using eloquent ORM

    	$user = user::all();
    	return view('user',compact('user'));
    }

    public function allUser()
    {
        $user = user::all();
        return view('userList',compact('user'));
    }
}
