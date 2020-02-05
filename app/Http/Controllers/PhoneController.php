<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phone;
use DB;

class PhoneController extends Controller
{
    public function index()
    {
    	//using query builder

    	// $phone = DB::table('phones')
    	// ->join('users','phones.user_id','users.id')->get();

    	//using eloquent ORM

    	$phone = phone::all();
    	return view('userBelongsTo',compact('phone'));
    }
}
