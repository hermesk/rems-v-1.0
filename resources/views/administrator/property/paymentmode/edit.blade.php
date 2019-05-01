@extends('layouts.layout')
@section('title',$paymentmode->name.'Location')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Edit Details for {{$paymentmode->name}}</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="/payment-mode/{{$paymentmode->id}}" method="POST">
          @csrf
          @method('PATCH')

         <div class="row form-group col-md-4 ">  	
		   <label for="name">Payment Mode<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="Payment Mode" value="{{old('name')?? $paymentmode->name}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	    <div class="box-footer">
  	    <button type="submit" class="btn btn-primary " > Update</button>
       </div>				
		</form>	
	</div>	
</div>
@endsection