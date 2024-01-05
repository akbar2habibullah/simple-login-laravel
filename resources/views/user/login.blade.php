@extends('app')
@section('content')
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
    <div class="col-md-4 bg-light mx-auto p-4">
        <h1 class="text-center fs-5">Silahkan Login</h1>
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <i data-feather="user"></i>
                <input class="form-control ms-2" type="username" name="username" value="{{ old('username') }}" placeholder='username'/>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <i data-feather="key"></i>
                <input class="form-control ms-2" type="password" name="password" placeholder='password'/>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary me-2">Login</button>
                <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
</div>
@endsection