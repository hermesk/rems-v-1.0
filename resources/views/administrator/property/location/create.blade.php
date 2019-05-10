@extends('layouts.layout')
@section('title','Add New Location')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Add New Location</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="/location" method="POST">
          @csrf

         <div class="row form-group col-md-4 ">  	
		   <label for="name">Location<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="location name" value="{{old('name')}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	    <div class="box-footer">
        <a href="/location/create" class="btn btn-secondary">Cancel</a>
  	    <button type="submit" class="btn btn-primary " > Add </button>

       </div>				
		</form>	
	</div>	
</div>
@endsection