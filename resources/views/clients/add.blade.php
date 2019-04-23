@extends('layouts.layout')
@section('title','Add New Client')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Add New Client</h1>	
	</div>
</div>


<div class="row">
	<div class="col-12">

 <form action="clients" method="POST">
  	@csrf
  	<div class="row">	
	    <div class="form-group">  	
		<label for="name">Name<span class="text-danger">*</span></label>
		<input  type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
		     <div>{{$errors->first('name')}}</div>

	    </div>
  </div> 

  <div class="row">
	    <div class="form-group">
	    	<label for="idno">ID No.<span class="text-danger">*</span></label>
	    	<input type="number" name="idno" class="form-control" placeholder="ID number" value="{{old('idno')}}" >
	    	 <div>{{$errors->first('idno')}}</div>
	    </div>
	        

	</div>

  	   <div class="row" >
	    <div class="form-group">
	    	<label for="mobile">Mobile No.<span class="text-danger">*</span></label>
	    	<input type="number" name="mobile" class="form-control" placeholder="mobile number" value="{{old('mobile')}}" >
	    	     <div>{{$errors->first('mobile')}}</div>

	    </div>
	</div>

  	 <div class="box-footer">

  	    <button type="submit" class="btn btn-primary"> Add </button>

       </div>

  </form>

	</div>
</div>

 

@endsection