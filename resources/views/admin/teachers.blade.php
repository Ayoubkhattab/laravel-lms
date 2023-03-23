

@extends('admin.layouts.template')


@section('page_title')

all teachers
@endsection

@section('content')

<div class="container p-4">



  <div class="card">
    <h5 class="card-header">Teacher Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>number</th>
            <th>name</th>
            <th>email</th>
            <th>pasword</th>
            <th>status</th>
            <th>options</th>


          </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
{{--            <td>{{$user->role}}</td>--}}
            <td>
                      <a href="{{route('edit_teacher', $user->id)}}" class="btn btn-primary bx bx-edit-alt me-1  "> Edit</a >

                        {{-- <a href="{{route('delete_teacher', $user->id)}}" class="btn btn-danger bx bx-edit-alt me-1  "> delete</a > --}}

                        <form id="delete-form" action="{{route('delete_teacher' , $user->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger bx bx-trash me-1"> delete</button>
                          </form> 
              </td>
          </tr>
  @endforeach

@endsection
