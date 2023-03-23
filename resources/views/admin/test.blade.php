@extends('admin.layouts.template')


@section('page_title')

add teachers
@endsection


@section('content')

<form action="" method="POST">
  @csrf
      <div class="row">
          <div class="control-groub col-12">
              <label for="title"> post title</label>
              <input type="text" id="title " class="form-control"  name="name">
          </div>
          <div class="control-groub col-12">
            <label for="body"> post body</label>
            <textarea type="text" id="body " class="form-control"  name="email" > </textarea>
        </div>
          <div class="control-groub col-12">
              <label for="body"> post body</label>
              <textarea type="text" id="body " class="form-control"  name="password" > </textarea>
          </div>
      </div>
      <br><br>
      <button class="btn btn-primary"> create post</button>
</form>

@endsection