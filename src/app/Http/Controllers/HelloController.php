<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	public function index(Request $resquest)
	{
		return view('hello.index', ['msg' => 'GET was requested']);
	}

	public function post(Request $resquest)
	{
		return view('hello.index', ['msg' => 'POST was requested']);
	}
}
