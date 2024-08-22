<?php

namespace App\Http\Controllers;
use App\models\Entrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\models\Batch;
use App\models\Student;

class EntrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrollments = Entrollment::all();
        return view ('entrollment.index')->with('entrollments',$entrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('entrollment.create',compact('batches','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        //  dd($input);
        Entrollment::create($input);
        return redirect('entrollments')->with('flash_message','entrollments Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entrollments = Entrollment::find($id);
        return view('entrollment.show')->with('entrollments', $entrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        $entrollment = Entrollment::find($id);
        return view('entrollment.create',compact('batches','students'))->with('entrollment', $entrollment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrollment = Entrollment::find($id);
        $entrollment->update($request->all());
        return redirect('entrollments')->with('flash_message', 'entrollment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrollment = Entrollment::find($id);

        if ($entrollment) {
            $entrollment->delete();
            return redirect('entrollment')->with('flash_message', 'entrollment deleted successfully!');
        } else {
            return redirect('entrollment')->with('error_message', 'entrollment not found!');
        }
    }
}
