<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	
    public function relationToUser(){

    	//return User::where('id', $this->id_user)->first()->name;

    	return $this->belongsTo('App\User', 'user_id'); 
    }

    public function comments(){

        return $this->morphMany('App\Comment', 'commentable');
    }
    
}
