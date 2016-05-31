<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
	protected $fillable = [
		'surname',
		'insertion',
		'familyname',
		'email',
		'phone',
		'mobile',
		'companie_id'
	];

	public function User()
	{
		return $this->hasOne('App\User');
	}

	public function companie()
	{
		return $this->belongsTo('App\companie');
	}

	public function internship()
	{
		return $this->hasOne('App\internship');
	}
}
