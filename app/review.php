<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'grade',
        'review',
        'stage_user_id',
        'status_id'
    ];

    public function status()
    {
        return $this->hasOne('App\status');
    }
}
