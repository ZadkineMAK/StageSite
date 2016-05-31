<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stage_user extends Model
{
    protected $fillable = [
        'user_id',
        'internship_id'
    ];

    public function stagetool()
    {
        return $this->belongsToMany('App\stagetool');
    }
}
