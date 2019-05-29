<?php

namespace App\Http\Controllers;
use TNkemdilim\MoneyToWords\Converter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PaymentMode;
use App\Transaction;


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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentmodes = PaymentMode::all();
        $locations = DB::table('locations')->pluck("name","id");
        $sizes = DB::table('sizes')->pluck("name","id");
        return view('transaction.create',compact('locations','paymentmodes','sizes'));
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
             'idno'=> 'required|numeric|min:7',
             'property'=>'required',
             'location'=>'required',
             'size'=> 'required',
             'plotno'=>'required',
             'cost'=>'required|numeric',
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
              $pmode = DB::table('paymentModes')->where('id', $pmode_id )->value('name');


               $receipt = array(
                'name'  => request('name'),
                'property'=>request('property'),
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

           $trx = Transaction::create($data);
           return view('Template.receipt',compact('receipt'));

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
      

     public function getPlotnos(Request $request)
        {
            $plotnos = DB::table("plotnos")
            ->where("size_id",$request->size_id)
            ->where("location_id",$request->location_id)
            ->pluck("plotno","id");

            return response()->json($plotnos);
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
}
