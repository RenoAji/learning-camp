@extends('layouts.app')
@section('body')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="" method="POST">
        @csrf
  
        <div>
            <label class="input input-bordered flex items-center gap-2">
                Email :
                <input type="email" class="grow" placeholder="example.site.com" name="email"/>
            </label>
        </div>

        <div>
            <label class="input input-bordered flex items-center gap-2">
                Password :
                <input type="password" class="grow" name="password" />
            </label>
        </div>

        <div class="w-1/2">
          <label class="label cursor-pointer gap-2 justify-normal">
            <span class="label-text">Remember me</span> 
            <input type="checkbox" checked="checked" class="checkbox" />
          </label>
        </div>
  
        <div>
          <button type="submit" class="btn btn-wide btn-primary flex justify-center m-auto">Sign in</button>
        </div>
      </form>
  
    <p class="mt-10 text-center text-sm text-gray-500">
        Doesn't have an account?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">register</a>
    </p>
    </div>
  </div>
@endsection