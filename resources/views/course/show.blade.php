@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $course->name }}</div>

{{--                    <div class="card-body">--}}
{{--                        <p>{{ $course->description }}</p>--}}
{{--                        <p>عدد الدروس: {{ $course->lessons()->count() }}</p>--}}

{{--                        @if (auth()->user()->isTeacher() && auth()->user()->id == $course->teacher_id)--}}
{{--                            <a href="{{ route('lessons.create', $course) }}" class="btn btn-primary">إضافة درس</a>--}}
{{--                        @endif--}}

{{--                        @if (auth()->user()->isStudent())--}}
{{--                            <form action="{{ route('student.courses.store') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="course_id" value="{{ $course->id }}">--}}
{{--                                <button type="submit" class="btn btn-primary">إضافة الكورس للطالب</button>--}}
{{--                            </form>--}}
{{--                        @endif--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <p>{{ $course->description }}</p>
{{--                      <p>عدد الدروس: {{ $course->lessons()->count() }}</p>--}}

{{--                       @if (auth()->user()->isTeacher() && auth()->user()->id == $course->teacher_id)--}}
{{--                           <a href="{{ route('lessons.create', $course) }}" class="btn btn-primary">إضافة درس</a>--}}
{{--                       @endif--}}

{{--                       @if (auth()->user()->isStudent())--}}
{{--                           <form action="{{ route('student.courses.store') }}" method="POST">--}}
{{--                               @csrf--}}
{{--                               <input type="hidden" name="course_id" value="{{ $course->id }}">--}}
{{--                               <button type="submit" class="btn btn-primary">إضافة الكورس للطالب</button>--}}
{{--                           </form>--}}
{{--                       @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
