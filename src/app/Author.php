<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	/**
	 * @var array
	 */
	protected $fillable = [
		'name',
	];
}
