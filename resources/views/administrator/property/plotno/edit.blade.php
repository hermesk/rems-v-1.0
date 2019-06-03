@extends('layouts.app')
@section('title', 'Edit plotno '.$plotno->size->name.' Details')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Edit Plotno {{$plotno->plotno}} Details</div>
            <div class="form">
            	<form method="POST" action="/plots/{{$plotno->id}}">
				@csrf
				@method('PATCH')
				<div class="row">
				<div class="col-md-4 form-group">
					<label for="location_id">Location<span class="text-danger">*</span></label>
					<select name="location_id" id="location_id" class="form-control">
						<option value="">Select location</option>
						@foreach($locations as $location)
						<option value="{{$location->id}}">{{$location->name}}</option>
						@endforeach
					</select>
					     <div>{{$errors->first('location_id')}}</div>
				 </div>	
                  </div>
                  <div class="row">
				   <div class="col-md-4 form-group">	
					<label for="size_id">Size<span class="text-danger">*</span></label>
					<select name="size_id" id="size_id" class="form-control">
						<option value="">Select Size</option>
						@foreach($sizes as $size)
						<option value="{{$size->id}}">{{$size->name}}</option>
						@endforeach
					</select>
					
					<div>{{$errors->first('size_id')}}</div>
				   	</div>
				   </div>
				   <div class="row">
					<div class="col-md-4 form-group">	
					<label for="plotno">Plot Numbers<span class="text-danger">*</span></label>
					<input  type="text" name="plotno" class="form-control" placeholder="plotnos" 
					value="{{old('plotno')?? $plotno->plotno}}">
					<div>{{$errors->first('plotnos')}}</div>	  
				    </div>
				</div>
                  <div class=" row form-group col-md-4">  	
					   <label for="cost">Cost<span class="text-danger">*</span></label>
					   <input  type="number" name="cost" class="form-control" placeholder="cost" value="{{old('cost')?? $plotno->cost}}">
					     <div>{{$errors->first('cost')}}</div>
				      </div>
			    <div class="box-footer">
			            <my-button type="submit" text="Update"></my-button>
			       </div>
			</form>
            </div>


            </div>
        </div>
    </div>
</div>
@endsection
