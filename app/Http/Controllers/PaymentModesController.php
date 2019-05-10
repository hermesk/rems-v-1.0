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
          $paymentmodes = PaymentMode::all();
        return view('administrator.property.paymentmode.index',compact('paymentmodes'));
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
         return redirect('payment-mode');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMode $paymentmode)
    {
            return view('administrator.property.paymentmode.show',compact('paymentmode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMode $paymentmode)
    {
        return view('administrator.property.paymentmode.edit',compact('paymentmode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentMode $paymentmode)
    {
            $data = request()->validate([
            'name'=>'required'
        ]);
        $paymentmode->update($data);
             session()->flash('message',' Payment Mode Updated Successfully');
        return redirect('/paymentmode/'.$location->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMode $paymentmode)
    {
                $paymentmode->delete();

        return redirect('payment-mode');
    }
}
