<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('course.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = new Course;

        $course->name = $request->name;
        $course->description = $request->description;
        $course->teacher = $request->teacher;

        // upload the image
        $image = $request->file('image');
        $image_name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('public/images/courses'), $image_name);

        $course->image = $image_name;


        $course->save();

        return redirect()->route('show_course', $course->id);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course=Course::findorfail($id);
//        dd($course);
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function userscourse(Course $course)
    {
        $coursesuser = Course::find($course->id);
        return view('',[
            'course'=>$course,
            'courseusers'=>$coursesuser,
        ]);
    }


    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
