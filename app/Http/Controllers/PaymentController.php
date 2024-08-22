<?php

namespace App\Http\Controllers;
use App\models\Entrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\models\Batch;
use App\models\Student;
use App\models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view ('payment.index')->with('payments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entrollments = Entrollment::pluck('entroll_no','id');
        return view('payment.create',compact('entrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        //  dd($input);
        Payment::create($input);
        return redirect('payments')->with('flash_message','Payments Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::find($id);
        return view('payment.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entrollments = Entrollment::pluck('entroll_no','id');
        $payment = Payment::find($id);
        return view('payment.create',compact('entrollments'))->with('payment', $payment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);
        $payment->update($request->all());
        return redirect('payments')->with('flash_message', 'payment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::find($id);

        if ($payment) {
            $payment->delete();
            return redirect('payment')->with('flash_message', 'payment deleted successfully!');
        } else {
            return redirect('payment')->with('error_message', 'payment not found!');
        }
    }
}
