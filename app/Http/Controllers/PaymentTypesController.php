<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentType;

class PaymentTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
          $paymentTypes = PaymentType::all();
    return view('administrator.paymentTypes.index',compact('paymentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.paymentTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
               'name'=>'required',
               'type'=>'required'
            ]);

        $ptype = PaymentType::create($data);
        
        session()->flash('message','Payment Type Saved Successfuly');

        return redirect()->route('paymentType.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentType $paymentType)
    {
        return view('administrator.paymentTypes.show',compact('paymentType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentType $paymentType)
    {
    return view('administrator.paymentTypes.edit',compact('paymentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentType $paymentType)
    {
        $update_data = request()->validate([
        'name'=>'required',
        'type'=>'required'
        ]);
        $paymentType->update($update_data);
        session()->flash('message', 'Payment Type Updated Successfuly');
        return redirect()->route('paymentType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentType $paymentType)
    {
        $paymentType->delete();
        return redirect()->route('paymentType.index');
    }
}
