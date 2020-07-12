@section('header')
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<ul id="dropdown1" class="dropdown-content">
  <li><a href="/igem#iGEM">iGEMとは</a></li>
  <li><a href="/igem#feature">特徴</a></li>
  <li><a href="/igem#example">研究例</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="/about#information">Information</a></li>
  <li><a href="/about#contact">Contact</a></li>
</ul>
<div class="navbar-fixed">
  <nav class="teal lighten-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo" id="customed-logo">iGEM-Waseda</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/igem" class="dropdown-trigger" data-target="dropdown1">iGEM</a></li>
        <li><a href="/about" class="dropdown-trigger" data-target="dropdown2">About us</a></li>
        <li><a href="/activity">Activity</a></li>
        <li><a href="/event">Event</a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
<ul id="slide-out" class="sidenav">
  <li style="height:100px"><a href="/" class="brand-logo teal-text lighten-1 customed-logo"><h3>iGEM<br>-Waseda</h3></a><li>
  <li><div class="divider"></div></li>
  <li><a href="/igem"><h4>iGEM</h4></a></li>
  <li><a href="/igem#iGEM" class="subheader">iGEMとは</a></li>
  <li><a href="/igem#feature" class="subheader">特徴</a></li>
  <li><a href="/igem#example" class="subheader">研究例</a></li>
  <li><div class="divider"></div></li>
  <li><a href="/about"><h4>About us</h4></a></li>
  <li><a href="/about#information" class="subheader">Information</a></li>
  <li><a href="/about#contact" class="subheader">Contact</a></li>
  <li><div class="divider"></div></li>
  <li><a href="/activity"><h4>Activity</h4></a></li>
  <li><div class="divider"></div></li>
  <li><a href="/event"><h4>Event</h4></a></li>
</ul>
@endsection
