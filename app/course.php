<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'location_id',
        'cohort_id'
    ];

    public function cohort()
    {
        return $this->belongsTo('App\cohort');
    }

    public function location()
    {
        return $this->belongsTo('App\location');
    }

    public function stage()
    {
        return $this->hasMany('App\stage');
    }
}
