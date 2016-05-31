<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{

	protected $fillable = [
		'name'
	];

	/**
	 * Get the comments for the blog post.
	 */
	public function locations() {
		return $this->hasMany('App\location');
	}
}
