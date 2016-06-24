<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cohort extends Model
{
    protected $fillable = [
        'name',
        'period',
    ];

    public function crebo()
    {
        return $this->belongsTo('App\crebo');
    }

    public function course()
    {
        return $this->hasOne('App\course');
    }
}

