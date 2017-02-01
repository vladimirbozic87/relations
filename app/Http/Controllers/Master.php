<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

class Master extends Controller
{
    public function getResult($id){

         //return $name;

    	 $info = Country::find($id);

         //return $info->countryName;

        //dd($info);

    	return view('myView')->with('info', $info);
    }

    public function getRoute(){

    	echo "Controller Get Route!";
    }


    public function getMaster(){
        return view("forms.form");
    } 

    public function postMaster(Request $request){

       //echo "POST success";

    	echo $request->input('username');
    }


}
