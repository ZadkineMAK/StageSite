<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password', 
        'role_id', 
        'contact_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function contact()
    {
        return $this->belongsTo('App\contact');
    }
    public function role()
    {
        return $this->belongsTo('App\role');
    }
    
    public function internships()
    {
        return $this->belongsToMany('App\internship', 'stage_users', 'user_id', 'internship_id');
    }
}
