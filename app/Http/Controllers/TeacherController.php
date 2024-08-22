<?php

namespace App\Http\Controllers;
use App\models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
       return view ('teacher.index')->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message','Teacher Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.create')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = teacher::find($id);
        $teacher->update($request->all());
        return redirect('teachers')->with('flash_message', 'teacher Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);

        if ($teacher) {
            $teacher->delete();
            return redirect('teachers')->with('flash_message', 'Teacher deleted successfully!');
        } else {
            return redirect('teachers')->with('error_message', 'Teacher not found!');
        }
    }
}
