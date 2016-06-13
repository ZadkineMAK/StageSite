<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
    protected $fillable = [
        'startdate',
        'enddate',
        'course_id',
        'contact_id',
        'status_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\course');
    }

    public function contact()
    {
        return $this->belongsTo('App\contact');
    }

    public function status()
    {
        return $this->belongsTo('App\status');
    }

    public function users()
    {
        return $this->belongsToMany('App\user', 'stage_user', 'internship_id', 'user_id');
    }
}
