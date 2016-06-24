<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crebo extends Model
{
    protected $fillable = [
        'name',
        'number'
    ];
    public function course()
    {
        return $this->hasOne('App\course');
    }
}
