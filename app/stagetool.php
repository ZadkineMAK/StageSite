<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stagetool extends Model
{
    protected $fillable = [
        'tool_id',
        'stage_user_id',
        'companie_id'
    ];

    public function stage_user()
    {
        return $this->hasOne('App\stage_user');
    }
}
