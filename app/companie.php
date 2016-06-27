<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $fillable = [
        'name',
        'address',
        'zipcode',
        'city',
        'phone'
    ];

    public function contact()
    {
        return $this->hasOne('App\contact');
    }

    public function tools()
    {
        return $this->belongsToMany('App\tool', 'stagetool', 'companie_id', 'tool_id');
    }

    public function review()
    {
        return $this->belongsToMany('App\review');
    }

   
}
