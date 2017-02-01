<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

class AjaxController extends Controller
{
    public function getAjax(){

    	return view('ajaxForm'); 
    }

    public function getAjaxResults($param){

        $posts = Posts::find($param);

    	return view('ajaxFormResults')->with('posts', $posts); 
    }

}
