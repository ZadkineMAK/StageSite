<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = [
        'name'
    ];

    public function internship()
    {
        return $this->hasOne('App\internship');
    }

    public function review()
    {
        return $this->belongsTo('App\review');
    }
}
