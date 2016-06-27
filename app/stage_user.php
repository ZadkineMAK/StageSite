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

    public function user()
    {
        return $this->hasOne('App\user');
    }

    public function internship()
    {
        return $this->hasOne('App\internship');
    }

    public function review(){
        return $this->belongsTo('App\review');
    }
}
