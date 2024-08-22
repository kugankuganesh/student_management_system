<?php

namespace App\Http\Controllers;
use App\models\Batch;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\models\Course;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view ('Batch.index')->with('batches',$batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses= Course::pluck('name','id');
        return view('batch.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        // dd($input);
        Batch::create($input);
        return redirect('batches')->with('flash_message','batch Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches = Batch::find($id);
        return view('batch.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses= Course::pluck('name','id');

        $batch = Batch::find($id);
        return view('batch.create',compact('courses'))->with('batch', $batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batch::find($id);
        $batch->update($request->all());
        return redirect('batches')->with('flash_message', 'batch Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batch = batch::find($id);

        if ($batch) {
            $batch->delete();
            return redirect('batches')->with('flash_message', 'batch deleted successfully!');
        } else {
            return redirect('batches')->with('error_message', 'batch not found!');
        }
    }
}
