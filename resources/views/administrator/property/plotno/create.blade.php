@extends('layouts.app')
@section('title','Add New Plot nos')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
          <div class="card-header">Add New Plot nos</div>
			<div class="form">

					<form action="/plotno" method="POST">
			          @csrf
			     <div class="row form-group col-md-8">  	
					<label for="location_id">Location<span class="text-danger">*</span></label>
					<select name="location_id" id="location_id" class="form-control">
						<option value="">Select location</option>
						@foreach($locations as $location)
						<option value="{{$location->id}}">{{$location->name}}</option>
						@endforeach
					</select>
					     <div>{{$errors->first('location_id')}}</div>
				 </div>	

				   <div class="row form-group col-md-8"> 	
					<label for="size_id">Size<span class="text-danger">*</span></label>
					<select name="size_id" id="size_id" class="form-control">
						
					</select>
					
					<div>{{$errors->first('size_id')}}</div>
				   	</div>
				      <div class=" row form-group col-md-12">  	
					   <label for="plotno">Plot Nos.<span class="text-danger">*</span></label>
					   <div class="col-md-3">
					   	 <input  type="text" name="from_plotno" class="form-control" placeholder="From" value="{{old('from_plotno')}}">
					     <div>{{$errors->first('from_plotno')}}</div>
					   </div>
					   <div class="col-md-3">
					   	 <input  type="text" name="to_plotno" class="form-control" placeholder="To" value="{{old('to_plotno')}}">
					     <div>{{$errors->first('to_plotno')}}</div>
					   </div>
				      </div>
				      <div class=" row form-group col-md-8">  	
					   <label for="cost">Cost<span class="text-danger">*</span></label>
					   <input  type="number" name="cost" class="form-control" placeholder="cost" value="{{old('cost')}}">
					     <div>{{$errors->first('cost')}}</div>
				      </div>
				     <div class="box-footer">
			        <cancle-button text="Cancel"  type="reset" ></cancle-button>
			        <my-button type="submit" text="Add"></my-button>

			       </div>				
					</form>	
	          </div>
            </div>
        </div>
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


