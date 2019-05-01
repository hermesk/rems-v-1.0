@extends('layouts.layout')
@section('title',$location->name.'Location')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Edit Details for {{$location->name}}</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="/location/{{$location->id}}" method="POST">
          @csrf
          @method('PATCH')

         <div class="row form-group col-md-4 ">  	
		   <label for="name">Location<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="location name" value="{{old('name')?? $location->name}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	    <div class="box-footer">
  	    <button type="submit" class="btn btn-primary " > Update</button>
       </div>				
		</form>	
	</div>	
</div>
@endsection