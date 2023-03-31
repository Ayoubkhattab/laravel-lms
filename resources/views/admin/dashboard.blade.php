

@extends('admin.layouts.template')

@section('page_title')

dashboard

@endsection
@section("admin-logout")
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            @method('post')
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('logout')  ">
                    {{ __('Log Out') }}
                </x-nav-link>
            </div>
        </form>
    </div>

@endsection

@section('content')

<div class="container text-center " style="margin: 25px; font-size:40px; font-weight:bold; ">
    hello from admin dashboard

</div>
@endsection
