@extends('layouts.navbar')
@section('body')
<div class="hero min-h-screen bg-base-200 w-full">
    <div class="hero-content text-center">
      <div class="sm:max-w-md">
        <h1 class="text-5xl font-bold">LearningCamp</h1>
        <p class="py-6">Di LearningCamp anda bisa membeli course yang anda inginkan. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quasi ipsam dolorem veniam quisquam consectetur.</p>
        <button class="btn btn-primary"><a href="/course">Lihat Course Kami</a></button>
        @guest
        <br>
        <button class="btn btn-primary mt-3 btn-outline"><a href="/login">Login</a></button>
        @endguest
        @auth
          @if (auth()->user()->is_admin)
          <br>
          <button class="btn btn-primary mt-3 btn-outline"><a href="/admin-dashboard">Admin Dashboard</a></button>
          @endif
        @endauth
      </div>
    </div>
</div>
@endsection