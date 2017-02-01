<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{

	 protected $table = "addresses";

     public function posts(){

     	return $this->hasManyThrough('App\Posts', 'App\User', 'addresses_id', 'user_id');
     }

    
}
