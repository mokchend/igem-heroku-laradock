@extends('template')
@section('title', 'iGEM-Waseda')
@include('head')
@include('header')

@section('content')
<div class="container">
  <div class="section">
    <h5>Event</h5>
    <div class="divider"></div>
    <div class="row">
      @forelse ($events as $event)
        <a class="modal-trigger" href="#modal{{ $event['id'] }}">
          <div class="col s12 m4 l3">
            <div class="card teal lighten-1">
              <div class="card-content white-text">
                <h6>{{ $event['title'] }}</h6>
                <img class="circle responsive-img" src="image/article.png">
              </div>
            </div>
          </div>
        </a>
        <div id="modal{{ $event['id'] }}" class="modal">
          <div class="modal-content">
            <h4>{{ $event['title'] }}</h4>
            <p>{{ $event['content'] }}</p>
          </div>
          <div class="modal-footer">
            <a href="{{ $event['anchor'] }}" class="modal-close waves-effect waves-red btn-flat">More</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
          </div>
        </div>
      @empty
        <div class="col s12">
          <h3 class="center-align">まだ記事は投稿されていません</h3>
        </div>
      @endforelse
    </div>
  </div>
</div>
@endsection
