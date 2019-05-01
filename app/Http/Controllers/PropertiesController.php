<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Size;
use App\Plotno;
use App\PaymentMode;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.property.index');
    }
    public function locationindex()
    {
        $locations = Location::all();
        return view('administrator.property.location.index',compact('locations'));
    }

     public function paymentModeindex()
    {
        $paymentmodes = PaymentMode::all();
        return view('administrator.property.paymentmode.index',compact('paymentmodes'));
    }

    public function Sizeindex()
    {
        $sizes = Size::all();
        return view('administrator.property.size.index',compact('sizes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createlocation()
    {
        
        return view('administrator.property.location.create');
    }

    public function createsize()
    {    
        $locations = Location::all();
        $size = new Size();
        
        
        return view('administrator.property.size.create',compact('locations','size'));
    }

    public function createplotno()
    {    
        $locations = Location::all();
        $sizes = Size::all();
        
        return view('administrator.property.plotno.create',compact('locations','sizes'));
    }
    public function createPaymentMode()
    {
        
        return view('administrator.property.paymentmode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelocation(Request $request)
    {
        
        $data = request()->validate([
            'name'=>'required'
        ]);
       

         $location = Location::create($data);
           
         return redirect('/property');
    }

    public function storePaymentMode(Request $request)
    {
        
        $data = request()->validate([
            'name'=>'required'
        ]);
       

         $paymentmode = PaymentMode::create($data);
           
         return redirect('/property');
    }

    public function storesize(Request $request)
     {
        $data = request()->validate([
            'name'=>'required',
            'location_id'=>'required'
        ]);
       

         $size = Size::create($data);
           
         return redirect('/property');
     }

    public function storeplotno(Request $request)
     {
        $from_plotno = request('from_plotno');
        $to_plotno = request('to_plotno');

        $data = request()->validate([
        'from_plotno'=>'required|integer|min:0|not_in:0',
        'to_plotno'=>'required|integer|min:0|not_in:0|gt:'.($from_plotno-1).'',
        'location_id'=>'required',
        'size_id'=>'required',
        'cost'=>'required|integer|numeric:min:0'
         ]);

       $plotnos = range($from_plotno,$to_plotno);

          //dd(json_encode($plotnos));
         //$property = Property::create($data);

         $plotno = new Plotno();

         $plotno->location_id = request('location_id');
         $plotno->size_id = request('size_id');
         $plotno->plotno =implode($plotnos, ', ');
         $plotno->cost = request('cost');

         $plotno->save();
       
           
         return redirect('/property');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showlocation(Location $location)
    {
        //$location = Location::findorfail($id);
    return view('administrator.property.location.show',compact('location'));
    }
   
    public function showPaymentMode(PaymentMode $paymentmode)
    {
    return view('administrator.property.paymentmode.show',compact('paymentmode'));
    }

    public function showSize(Size $size)
    {
    return view('administrator.property.size.show',compact('size'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editlocation(Location $location)
    {
    return view('administrator.property.location.edit',compact('location'));
    }

    public function editPaymentMode(PaymentMode $paymentmode)
    {

    return view('administrator.property.paymentmode.edit',compact('paymentmode'));
    }

    public function editSize(Size $size)
    {
          $locations = Location::all();
    return view('administrator.property.size.edit',compact('size','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatelocation(Location $location)
    {
        $data = request()->validate([
            'name'=>'required'
        ]);
        $location->update($data);

        return redirect('/location/'.$location->id);
    }

    public function updatePaymentMode(PaymentMode $paymentmode)
    {
        $data = request()->validate([
            'name'=>'required'
        ]);
        $paymentmode->update($data);

        return redirect('/paymentmode/'.$location->id);
    }

    public function updateSize(Size $size)
    {
        $data = request()->validate([
            'name'=>'required','location_id'=>'required'
        ]);
        $size->update($data);

        return redirect('/size/'.$size->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroylocation(Location $location)
    {
        $location->delete();

        return redirect('location');
    }

    public function destroyPaymentMode(PaymentMode $paymentmode)
    {
        $paymentmode->delete();

        return redirect('payment-mode');
    }
    public function destroySize(Size $size)
    {
       $size->delete();

       return redirect('/size');
    }

}
