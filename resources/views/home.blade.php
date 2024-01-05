@extends('app')
@section('content')
@auth
<style>
    video {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        min-width: 100vw;
        min-height: 100%;
        height: auto;
        z-index: -1;
    }
</style>
<video autoplay loop muted poster="poster.jpg">
  <source src="/assets/background_video_new.mp4" type="video/mp4">
  <source src="/assets/background_video_new.webm" type="video/webm">
</video>
<div class="row vh-100 d-flex flex-column justify-content-center">
    <div class="col-md-4 bg-light mx-auto p-4 d-flex flex-column align-items-center">
      <p class='text-center'>Selamat Datang <b>{{ Auth::user()->name }}, di Nasari Digital!</b></p>
      <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
@endauth
@guest
<script>window.location = "/login";</script>
@endguest
@endsection