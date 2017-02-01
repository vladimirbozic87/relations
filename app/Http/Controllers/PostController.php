<?php

namespace App\Http\Controllers;

use App\Posts;

use App\User;

use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;



class PostController extends Controller
{
    public function getPosts(){

    	$posts = Posts::all();

        //dd($posts);

    	return view('posts')->with('posts', $posts);
    }


    public function getProfile($name){

       $user = User::where('name', $name)->first();

       $auth = Auth::user();

       return view('profile')->with('user', $user)->with('auth', $auth);

    } 

}
