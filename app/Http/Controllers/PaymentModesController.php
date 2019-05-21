<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMode;

class PaymentModesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $paymentModes = PaymentMode::all();
        return view('administrator.property.paymentmode.index',compact('paymentModes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.property.paymentmode.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentMode $paymentmode)
    {
         
        $data = request()->validate([
            'name'=>'required'
        ]);
       

         $paymentmode = PaymentMode::create($data);
         session()->flash('message',' Payment Mode created Successfully'); 
         return redirect()->route('paymentMode.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMode $paymentMode)
    {
            return view('administrator.property.paymentmode.show',compact('paymentMode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMode $paymentMode)
    {
        return view('administrator.property.paymentmode.edit',compact('paymentMode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentMode $paymentMode)
    {
            $data = request()->validate([
            'name'=>'required'
        ]);
        $paymentMode->update($data);
             session()->flash('message',' Payment Mode Updated Successfully');
        return redirect()->route('paymentMode.show',['paymentMode'=>$paymentMode]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMode $paymentMode)
    {
                $paymentMode->delete();

        return redirect()->route('paymentMode.index');
    }
}
