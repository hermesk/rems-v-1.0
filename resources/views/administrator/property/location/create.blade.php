@extends('layouts.app')
@section('title','Add New Location')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Add New Location</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="{{route('location.store')}}" method="POST">
          @csrf

         <div class="row form-group col-md-4 ">  	
		   <label for="name">Location<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="location name" value="{{old('name')}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	    <div class="box-footer">
        <cancle-button text="Cancel"  type="reset" ></cancle-button>
        <my-button type="submit" text="Add"></my-button>

       </div>				
		</form>	
	</div>	
</div>
@endsection