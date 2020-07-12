<?php

namespace App\Admin;

use Enomotodev\LaractiveAdmin\Http\Controllers\Controller;

class Author extends Controller
{
	/**
	 * @var string
	 */
	public $model = \App\Author::class;

	/**
	 * @var array
	 */
	protected $validate = [
		'name' => 'required|max:100',
	];
}
