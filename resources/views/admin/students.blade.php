

@extends('admin.layouts.template')

@section('page_title')

all student
@endsection


@section('content')

<div class="container p-4">



    <div class="card">
        <h5 class="card-header">Student Table</h5>
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
                            <a href="" class="btn btn-primary bx bx-edit-alt me-1 "> Edit</a >
                            <a href="" class="btn btn-danger bx bx-trash me-1 "> Delete</a    >
                        </td>
                    </tr>
            @endforeach








            {{--    <!-- Responsive Table -->--}}
{{--    <div class="card">--}}
{{--        <h5 class="card-header">Teachers Table</h5>--}}
{{--        <div class="table-responsive text-nowrap">--}}
{{--          <table class="table">--}}
{{--            <thead>--}}
{{--              <tr class="text-nowrap">--}}
{{--                <th>#</th>--}}
{{--                <th>name</th>--}}
{{--                <th>email</th>--}}
{{--                <th>pasword</th>--}}
{{--                <th>status</th>--}}
{{--                <th>options</th>--}}

{{--              --}}
{{--              </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--              <tr>--}}
{{--                <th scope="row">1</th>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>--}}
{{--                          <a href="" class="btn btn-primary bx bx-edit-alt me-1 "> Edit</a >--}}
{{--                          <a href="" class="btn btn-danger bx bx-trash me-1 "> Delete</a    >--}}
{{--                  </td>--}}
{{--              </tr>--}}
{{--              <tr>--}}
{{--                <th scope="row">2</th>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>--}}
{{--                    <a href="" class="btn btn-primary bx bx-edit-alt me-1 "> Edit</a >--}}
{{--                    <a href="" class="btn btn-danger bx bx-trash me-1 "> Delete</a    >--}}
{{--            </td>--}}
{{--              </tr>--}}
{{--              <tr>--}}
{{--                <th scope="row">3</th>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>Table cell</td>--}}
{{--                <td>--}}
{{--                    <a href="" class="btn btn-primary bx bx-edit-alt me-1 "> Edit</a >--}}
{{--                    <a href="" class="btn btn-danger bx bx-trash me-1 "> Delete</a    >--}}
{{--            </td>--}}
{{--              </tr>--}}
{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <!--/ Responsive Table -->--}}
</div>
@endsection
