<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Location;
use App\Size;
use App\Plotno;

class PlotnosController extends Controller
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
        return view('administrator.property.index');
    }
    
    // public function plotsAllocation()
    // {  
    //     //$plotnos = Plotno::with('location','size')->get(); //eager loading
    //      $plotnos = new Plotno();
    //     return view('reports.plots',compact('plotnos'));
    // }

    public function takenPlots()
    {  
           // $plotnos = DB::table("plotnos")
           //  ->where('status',1)
           //  ->pluck("client_id");
            $plotnos = Plotno::with('location','size')
            ->where('status',1)
            ->paginate(15);

        return view('reports.plots.taken',compact('plotnos'));
    }
    public function availablePlots()
    {  
            $plotnos = Plotno::with('location','size')
            ->where('status',0)
            ->paginate(15);

        return view('reports.plots.available',compact('plotnos'));
    }

     public function plotsindex()
    {  
        $plotnos = Plotno::with('location','size')->paginate(15);
        //->get(); //eager loading
         
        return view('administrator.property.plotno.index',compact('plotnos'));
    }
     public function plotsReport()
    {  
        $plotnos = Plotno::with('location','size')->paginate(15);
        //->get(); //eager loading
         
        return view('reports.plots',compact('plotnos'));
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
    


    public function store(Request $request)
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

         //dd(count($plotnos));

         for ($i=0; $i <count($plotnos); $i++) { 

             $plotno = new Plotno();

             $plotno->location_id = request('location_id');
             $plotno->size_id = request('size_id');
             $plotno->plotno = $plotnos[$i];
             $plotno->cost = request('cost');

             $plotno->save();
            
           
         }
        return redirect('/property');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show(Plotno $plotno)
    {
         return view('administrator.property.plotno.show',compact('plotno'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   public function edit(Plotno $plotno)
    {
        $locations = Location::all();
        $sizes = Size::all();
        return view('administrator.property.plotno.edit',compact('plotno','locations','sizes'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   public function update(Plotno $plotno)
    {
        $data = request()->validate([
            'plotno'=>'required',
            'location_id'=>'required',
            'size_id'=> 'required',
            'cost'=> 'required'
        ]);
        
    
          $plotno->update($data);

          session()->flash('message',' Plot Numbers Updated Successfully');
        return redirect('/plots/'.$plotno->id);
          //return redirect('plots');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    public function destroy()
    {
       
    }

}
