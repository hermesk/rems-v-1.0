<?php

namespace App\Http\Controllers;
use TNkemdilim\MoneyToWords\Converter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PaymentMode;
use App\Transaction;
use App\PaymentType;
use Auth;


class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $trxs = Transaction::paginate(15);

        return view('reports.transactions',compact('trxs'));
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
        $locations = DB::table('locations')->pluck("name","id");
        $sizes = DB::table('sizes')->pluck("name","id");
        return view('transaction.create',compact('locations','paymentmodes','paymentTypes','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate_data = $request->validate([
             'name'=>'required|string|max:50',
             'idno'=> 'required|numeric|min:7',
             'paymentType'=>'required',
             'location'=>'required',
             'size'=> 'required',
             'plotno'=>'nullable',
             'cost'=>'nullable',
             'date'=> 'required|date',
             'paymentmode'=>'required',
             'amount'=>'required|numeric',
             'narration'=>'required',
             'reference'=>'required'
        ]);

             //convert amount to words
            $converter = new Converter("Kenya Shillings", "Cents");
            $amount = $converter->convert(request('amount'));
              //get location name
              $location_id   = request('location');
              $location = DB::table('locations')->where('id', $location_id )->value('name');
              
                     //get location name
              $size_id   = request('size');
              $size = DB::table('sizes')->where('id', $size_id)->value('name');
             //get payment mode name
              $pmode_id = request('paymentmode');
              $pmode = DB::table('payment_modes')->where('id', $pmode_id )->value('name');
               //get payment type name
              $payment_type_id = request('paymentType');
              $payment_type = DB::table('payment_types')->where('id', $payment_type_id)->value('name');
              //get client_id
              $client_idno = request('idno');
              // $client_id = DB::table('clients')
              //              ->where('idno',$client_idno)
              //              ->value('id');
              $username = Auth::user()->name;
              //rctno
              $lastrctnoID  = DB::table('transactions')
                              ->orderBy('id', 'desc')->pluck('id')
                              ->first();
                $newrctnoID = $lastrctnoID + 1;
                $rctno = 'RLC'.$newrctnoID;


           //insert in trx table
             $trx = new Transaction();
             
             $trx->receiptno = $rctno;
             $trx->client_id = $client_idno;
             $trx->payment_type_id = request('paymentType');
             $trx->location_id = request('location');
             $trx->size_id = request('size');
             $trx->paymentmode_id = request('paymentmode');
             $trx->plotno = request('plotno');
             $trx->cost = request('cost');
             $trx->date = request('date');
             $trx->amount = request('amount');
             $trx->reference = request('reference');
             $trx->narration = request('narration');
             $trx->created_by =$username;

             $trx->save();

             //update plot numbers
             $plotno = request('plotno');

             $update_plotno = DB::table('plotnos')
                                ->where('location_id', $location_id)
                                ->where('size_id', $size_id)
                                ->where('plotno', $plotno)
                                ->update(['status' => 1,
                                          'client_id'=>$client_idno
                                  ]);

              
                 


                                  //receipt details
               $receipt = array(
                'rctno' =>$rctno,
                'name'  =>request('name'),
                'ptype'=> $payment_type,
                'location'=> $location,
                'size' => $size,
                'plotno'=>request('plotno'),
                'cost' => request('cost'),
                'amount'=>request('amount'),
                'pmode' =>$pmode,
                'date' =>request('date'),
                'narr' =>request('narration'),
                'amountinWords' => $amount

            );
            return view('Template.transaction_receipt',compact('receipt'));

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

    public function getClientId(Request $request) 
    {

            $clientid = DB::table('clients')->where('idno', $request->idno)
                          ->pluck("id");

            return response()->json($clientid);
    }
    public function getClient(Request $request) 
    {

            $client_name = DB::table('clients')->where('idno', $request->idno)
                          ->pluck("name");

            return response()->json($client_name);
    }
      

     public function getPlotnos(Request $request)
        {
            $plotnos = DB::table("plotnos")
            ->where("size_id",$request->size_id)
            ->where("location_id",$request->location_id)
            ->whereNull('status')
            ->pluck("plotno","id");

            return response()->json($plotnos);
        }
        //get client taken plots
        public function getClientPlots(Request $request)
        {
            $client_plots = DB::table("plotnos")
            ->where("size_id",$request->size_id)
            ->where("location_id",$request->location_id)
            ->where("client_id",$request->client_id)
            ->pluck("plotno","id");

            return response()->json($client_plots);
        }

        public function getCost(Request $request)
        {
          
            $cost = DB::table("plotnos")
            ->where("plotno",$request->plotno)
            ->where("size_id",$request->size_id)
            ->where("location_id",$request->location_id)
            ->pluck("cost");

            return json_encode($cost);
        }

        public function searchtrx(Request $request){

            //$search = $request->get('search');
            $trxs = DB::table('transactions')
                        ->where("id",2)->paginate(15);
                        //->get();
            return view('reports.transactions',compact('trxs'));
        }
}
