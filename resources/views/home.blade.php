@extends('layouts.app')
@section("user-login-nav")
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            @method('post')
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                <x-nav-link :href="route('create_course')  ">
                    {{ __('add course') }}
                </x-nav-link>
                <x-nav-link :href="route('logout')  ">
                    {{ __('Log Out') }}
                </x-nav-link>
            </div>
        </form>
    </div>

@endsection
@section('content')
    <div class="bg-blue-200">
        <div class="container mx-auto p-4">
            <div class="row ">
                @foreach($courses as $course)
                    <div class="card" style="margin-right: 20px; margin-bottom: 20px; width: calc(25% - 20px);">
                        <img src="{{$course->image}}" class="card-img-top d-block w-100" alt="...">
                        <div class="card-body p-3">
                            <h1 class="card-title text-center" style="font-weight:bold ; font-size: large ">{{$course->name}}</h1>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                        <a href="{{route('show_course',$course->id)}}" class="btn btn-primary  m-4">Go to course</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
