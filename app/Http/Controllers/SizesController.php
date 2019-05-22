<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;
use App\Location;

class SizesController extends Controller
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
        $sizes = Size::with('location')->get();
        return view('administrator.property.size.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        $size = new Size();
        
        
        return view('administrator.property.size.create',compact('locations','size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Size $size)
    {
        $data = request()->validate([
            'name'=>'required',
            'location_id'=>'required'
        ]);
       

         $size = Size::create($data);
                  session()->flash('message',' Size Created Successfully');

         return redirect('size');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
      return view('administrator.property.size.show',compact('size'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
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
    public function update(Size $size)
    {
        $data = request()->validate([
            'name'=>'required','location_id'=>'required'
        ]);
        $size->update($data);
                session()->flash('message',' Size Updated Successfully');

        return redirect('/size/'.$size->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();

       return redirect('/size');
    }
}
