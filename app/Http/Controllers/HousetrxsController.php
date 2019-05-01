<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Housetrx;
use App\Location;
use App\Size;
use App\Plotno;
use App\PaymentMode;
use DB;


class HousetrxsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $housetrxs= Housetrx::all();

        return view('house.index',compact('housetrxs'));
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
        return view('house.create',compact('locations','paymentmodes'));
    }
    

     public function getSizes(Request $request)
        {
            // $sizes = Size::all()
            // ->where("location_id",$request->location_id);
             $sizes = DB::table("sizes")
            ->where("location_id",$request->location_id)
            ->pluck("name","id");
            
            return response()->json($sizes);
        }

     public function getPlotnos(Request $request)
        {
            // $plotnos = Plotno::all()
            // ->where("size_id",$request->size_id);
            $plotnos = DB::table("plotnos")
            ->where("size_id",$request->size_id)
            ->pluck("plotno","id");

            return response()->json($plotnos);
        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
             'name'=>'required|string|max:50',
             'idno'=> 'required|numeric|min:7',
             'location'=>'required',
             'size'=> 'required',
             'plotno'=>'required',
             'cost'=>'required|numeric',
             'paymentmode'=>'required',
             'amount'=>'required|numeric',
             'narration'=>'required',
             'reference'=>'required'
        ]);

        $housetrx = Housetrx::create($data);
         return redirect('/housetrx');
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
