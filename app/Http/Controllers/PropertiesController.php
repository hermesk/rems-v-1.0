<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Size;
use App\Plotno;

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
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function createplotno()
    {    
        $locations = Location::all();
        $sizes = Size::all();
        
        return view('administrator.property.plotno.create',compact('locations','sizes'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    


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
   
    public function show()
    {
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   public function edit()
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   public function update()
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    public function destroySize()
    {
       
    }

}
