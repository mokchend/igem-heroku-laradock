<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{
		$rules = [
			'title' => 'required',
			'content'=>'required',
			'category' => 'required',
		];

		$messages = [
			'title.required' => 'タイトルを正しく入力してください。',
			'content.required' => '本文を正しく入力してください。',
			'category.required' => 'カテゴリーを選択してください。',
		];

		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->passes()) {
		$post = new Post;
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->price = Input::get('price');
		$post->category = Input::get('category');
		$post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
		$post->save();
		return Redirect::route('posts.create')->with('success', '投稿が完了しました。');
		} else {
			return Redirect::route('posts.create')->withErrors($validator)->withInput();
		}
	}
}
