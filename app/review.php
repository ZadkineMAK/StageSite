<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'grade',
        'review',
        'user_id',
        'status_id',
        'companie_id'
    ];

    public function status()
    {
        return $this->hasOne('App\status');
    }

    public function companie()
    {
        return $this->hasOne('App\companie');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
