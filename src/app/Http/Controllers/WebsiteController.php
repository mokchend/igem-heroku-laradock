<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;

class WebsiteController extends Controller
{

  public function index ()
  {
    $activities = Article::take(2)->get()->toArray();
    $events = Event::take(2)->get()->toArray();

    return view('index',compact('activities', 'events'));
  }

  public function igem ()
  {
    return view('igem');
  }

  public function about ()
  {
    return view('about');
  }

  public function activity ()
  {
    $activities = Article::all()->toArray();

    return view('activity',compact('activities'));
  }

  public function event ()
  {
    $events = Event::all()->toArray();

    return view('event',compact('events'));
  }

}
