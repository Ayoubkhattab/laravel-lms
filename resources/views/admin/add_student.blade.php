

@extends('admin.layouts.template')


@section('page_title')

add student
@endsection

@section('content')

<div class="container p-4" >
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">add new student</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="" method="POST">
                @csrf
                {{-- name --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="name teacher" />
                </div>
              </div>
             {{-- email --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                       name="email"
                      type="text"
                      id="basic-default-email"
                      class="form-control"
                      placeholder="john.doe"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                  </div>
                  <div class="form-text">You can use letters, numbers & periods</div>
                </div>
              </div>

              {{-- pass --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                <div class="col-sm-10">
                  <input
                      name="password"
                    type="password"
                    class="form-control"
                    id="basic-default-company"
                    placeholder="enter password"
                  />
                </div>
              </div>

              <div class="row mb-3">

              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection
