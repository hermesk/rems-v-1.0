<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TNkemdilim\MoneyToWords\Converter;
use App\PaymentMode;
use App\payments_receipt;
use App\PaymentType;
use App\Payment;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        $paymentTypes =PaymentType::all();
        return view('payments.index',compact('payments','paymentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentmodes = PaymentMode::all();
        $paymentTypes = PaymentType::all();
        return view('payments.create',compact('paymentmodes','paymentTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = request()->validate([
             'name'=>'required|string|max:50',
             'mobile'=>'required|numeric|min:10',
             'ptype'=>'required',
             'paymentmode'=>'required',
             'amount'=>'required|numeric',
             'reference'=>'required',
             'narration'=>'required'
                  ]);
     //convert amount to words
        $converter = new Converter("Kenya Shillings", "Cents");
        $amount = $converter->convert(request('amount'));
       //get payment mode
          $pmode_id = request('paymentmode');
          $pmode = DB::table('payment_modes')->where('id', $pmode_id )->value('name');

          //generate receipt no
         $lastrctnoID  = DB::table('transactions')
                              ->orderBy('id', 'desc')->pluck('id')
                              ->first();
                $newrctnoID = $lastrctnoID + 1;
                $rctno = 'RLC'.$newrctnoID;



       $receipt = array(
            'receiptno'=>$rctno,
            'name'  => request('name'),
            'mobile'=>request('mobile'),
            'amount'=>request('amount'),
            'mode' =>$pmode,
            'type' =>request('ptype'),
            'narration'  =>request('narration'),
            'amount_in_words' => $amount           

            );

       $payment = Payment::create($data);
        $rct = payments_receipt::create($receipt);
       //session()->flash('message',' Payment Saved Successfully');
       return view('Template.payments_receipt',compact('receipt'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
