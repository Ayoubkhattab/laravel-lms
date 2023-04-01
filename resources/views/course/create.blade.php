@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Add Course</h1>
                <hr>
                <form method="POST" action="{{ route('add_course') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="teacher" class="col-md-4 col-form-label text-md-right">{{ __('Teacher Name') }}</label>

                        <div class="col-md-6">
                            <input id="teacher" type="text"
                                   class="form-control @error('teacher') is-invalid @enderror" name="teacher"
                                   value="{{ old('teacher') }}" required autocomplete="teacher" autofocus>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Course Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                        <small class="form-text text-muted">Max size 2MB</small>
                    </div>
                    <x-primary-button class="ml-3 m-5">
                        {{ __('add course') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
@endsection
