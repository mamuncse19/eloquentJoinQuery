<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\user;
use DB;
class PostController extends Controller
{
    public function index()
    {
    	// using query builder
    	// $post = DB::table('posts')->join('users','posts.user_id','users.id')
    	// ->join('categories','posts.category_id','categories.id')
    	// ->select('posts.*','users.name','categories.category_name')->get();

    	// using eloquent ORM

    	$post = post::all();
    	return view('post',compact('post'));
    }

    public function postByUser($id)
    {
    	$post = post::where('user_id',$id)->get();

    	return view('userByPost',compact('post'));
    }
}
