@extends('layouts.app')
@section('user-login-nav')

    @if (Route::has('login'))
        <div class="ml-1 sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

@endsection
@section('content')
    <div class="bg-blue-200">
        <div class="container mx-auto p-4">
            <div class="row ">
                @foreach($courses as $course)
                    <div class="card" style="margin-right: 20px; margin-bottom: 20px; width: calc(25% - 20px);">
                        <img src="{{$course->img}}" class="card-img-top d-block w-100" alt="...">
                        <div class="card-body p-3">
                            <h1 class="card-title text-center" style="font-weight:bold ; font-size: large ">{{$course->name}}</h1>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <h1 class="m-2"> teacher name: <p class=" inline-flex" style="font-weight:bold; font-size:20px"> {{ $course->teacher }}</p></h1>
                        <a href="{{route('show_course',$course->id)}}" class="btn btn-primary m-4 align-bottom">Go to course</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
