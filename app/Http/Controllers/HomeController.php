<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
//        dd($courses);
        return view('index',compact('courses'));
    }
    public function home()
    {
        $courses = Course::all();
        return view('home' , compact('courses'));
    }
    public function course(Course $course)
    {
        return view('showCourse',[
            'course' => $course
        ]);
    }

}
