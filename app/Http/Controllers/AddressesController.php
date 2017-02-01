<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Addresses;

class AddressesController extends Controller
{
    public function getAddresses($id){

        //echo $id;

        $addresses = Addresses::find($id);

        //dd($addresses);

        return View('address')->with('addresses', $addresses);
    }
}
