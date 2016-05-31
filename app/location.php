<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
	protected $fillable = [
		'address',
		'zipcode',
		'city',
		'school_id'
	];

	public function school()
	{
		return $this->belongsTo('App\school');
	}

	public function course()
	{
		return $this->hasOne('App\course');
	}
}
