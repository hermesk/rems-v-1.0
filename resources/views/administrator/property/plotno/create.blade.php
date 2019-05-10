@extends('layouts.layout')
@section('title','Add New Plot nos')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Add New Plot nos</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="/plotno" method="POST">
          @csrf
     <div class="row form-group col-md-4">  	
		<label for="location_id">Location<span class="text-danger">*</span></label>
		<select name="location_id" id="location_id" class="form-control">
			<option value="">Select location</option>
			@foreach($locations as $location)
			<option value="{{$location->id}}">{{$location->name}}</option>
			@endforeach
		</select>
		     <div>{{$errors->first('location_id')}}</div>
	 </div>	

	   <div class="row form-group col-md-4"> 	
		<label for="size_id">Size<span class="text-danger">*</span></label>
		<select name="size_id" id="size_id" class="form-control">
			{{-- <option value="">Select Size</option>
            @foreach($sizes as $size)
			<option value="{{$size->id}}">{{$size->name}}</option>
			@endforeach --}}
		</select>
		
		<div>{{$errors->first('size_id')}}</div>
	   	</div>
	      <div class=" row form-group col-md-4">  	
		   <label for="plotno">Plot Nos.<span class="text-danger">*</span></label>
		   <div class="col-md-4">
		   	 <input  type="text" name="from_plotno" class="form-control" placeholder="From" value="{{old('from_plotno')}}">
		     <div>{{$errors->first('from_plotno')}}</div>
		   </div>
		   <div class="col-md-4">
		   	 <input  type="text" name="to_plotno" class="form-control" placeholder="To" value="{{old('to_plotno')}}">
		     <div>{{$errors->first('to_plotno')}}</div>
		   </div>
	      </div>
	      <div class=" row form-group col-md-4">  	
		   <label for="cost">Cost<span class="text-danger">*</span></label>
		   <input  type="number" name="cost" class="form-control" placeholder="cost" value="{{old('cost')}}">
		     <div>{{$errors->first('cost')}}</div>
	      </div>
	      <div class="box-footer">
        <a href="/plotno/create" class="btn btn-secondary">Cancel</a>
  	    <button type="submit" class="btn btn-primary " > Add </button>

       </div>				
		</form>	
	</div>	
</div>
  <script type="text/javascript">
    $('#location_id').change(function(){
    var locationID = $(this).val();    
    if(locationID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sizes')}}?location_id="+locationID,
           success:function(res){               
            if(res){
                $("#size_id").empty();
                $("#size_id").append('<option>--Select Size--</option>');
                $.each(res,function(key,value){
                	
                    $("#size_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#size_id").empty();
            }
           }
        });
    }else{
        $("#size_id").empty();
        //$("#plotno").empty();
    }      
   });
   </script>
@endsection


