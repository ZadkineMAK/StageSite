<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tool extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function companies()
    {
        return $this->belongsToMany('App\companie', 'stagetool', 'tool_id', 'companie_id');
    }

    public function intership(){
        return $this->hasOne('App\intership');
    }
}

