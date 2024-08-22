<?php

namespace App\Http\Controllers;
use App\models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
       return view ('student.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Student::create($input);
        return redirect('students')->with('flash_message','student Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('student.show')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.create')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('students')->with('flash_message', 'Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();
            return redirect('students')->with('flash_message', 'Student deleted successfully!');
        } else {
            return redirect('students')->with('error_message', 'Student not found!');
        }
    }
}
