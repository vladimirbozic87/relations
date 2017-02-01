<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function getPost(){

        //$post = Posts::where('user_id', $this->id)->get();

        $post = $this->hasMany('App\Posts', 'user_id');

        return $post;
    }


    public function getAddresses(){

        $address = $this->hasOne('App\Addresses', 'id');

        return $address;
    }

    public function getRoles(){

        //$roles = $this->belongsToMany('App\Roles', 'roles_user', 'role_id', 'user_id');

        $roles = $this->belongsToMany('App\Roles', 'roles_user', 'user_id', 'role_id');
                       

        return $roles;
    }

    
    public function comments(){

        return $this->morphMany('App\Comment', 'commentable');
    }


    public function commentsByUser(){

        return $this->hasMany('App\Comment', 'user_id')->where('commentable_type', 'App\Posts');
    }

}
