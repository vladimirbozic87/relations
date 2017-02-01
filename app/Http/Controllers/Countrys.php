<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

class Countrys extends Controller
{
      
    public function country($id){

       $country = Country::find($id);

       return view('country')->with('country', $country);
    }

}
