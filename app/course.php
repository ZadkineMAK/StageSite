<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'location_id',
        'cohort_id',
        'crebo_id'
    ];

    public function getFullNameAttribute()
    {
        return
            $this->location->school->name . ' ' .
            $this->location->address . ' ' .
            $this->cohort->name . '(' . $this->crebo->number . ') ' .
            $this->crebo->name;
    }

    public function cohort()
    {
        return $this->belongsTo('App\cohort');
    }

    public function crebo()
    {
        return $this->belongsTo('App\crebo');
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
