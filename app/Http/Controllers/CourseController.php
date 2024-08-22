<?php

namespace App\Http\Controllers;
use App\models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view ('course.index')->with('courses',$courses);
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
        $input =$request->all();
        // dd($input);
        Course::create($input);
        return redirect('courses')->with('flash_message','course Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('course.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('course.create')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $course->update($request->all());
        return redirect('courses')->with('flash_message', 'course Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);

        if ($course) {
            $course->delete();
            return redirect('courses')->with('flash_message', 'course deleted successfully!');
        } else {
            return redirect('courses')->with('error_message', 'course not found!');
        }
    }
}
