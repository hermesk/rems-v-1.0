@extends('layouts.layout')
@section('title','Land transactions')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Land transactions</h1>	
	</div>
</div>
<div class="row">

<div class="col-12">
<form action="/landtrx" method="POST">
			@csrf
	<div class="row">
	  <div class="col-md-4 form-group">
	    
	     <label for="idno">ID No.<span class="text-danger">*</span></label>
	    	<input type="number" name="idno" class="form-control" placeholder="ID number" value="{{old('idno')}}" >
	    	 <div>{{$errors->first('idno')}}</div>
	   
	 </div>

	<div class="col-md-4 form-group">	
		<label for="name">Name<span class="text-danger">*</span></label>
		<input  type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
		<div>{{$errors->first('name')}}</div>
	  
	</div>

	 <div class="form-group col-md-4">  	
		<label for="location">Location<span class="text-danger">*</span></label>
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
		<label for="size">Size<span class="text-danger">*</span></label>
		<select name="size" id="size" class="form-control">
			<option value="">Select Size</option>
			<option value="1/8">1/8 Acre</option>
			<option value="1/4">1/4 Acre</option>
			<option value="1/2">1/2 Acre</option>
			<option value="1 acre">1  Acre</option>	
		</select>
		
		<div>{{$errors->first('size')}}</div>
	   
	</div>
	<div class="col-md-4 form-group"> 	
		<label for="plotno">Plot No<span class="text-danger">*</span></label>
		<select name="plotno" id="plotno" class="form-control">
			<option value="">Select Plot no</option>
			<option value="2">1</option>
			<option value="3">2</option>
			<option value="4">3</option>
			<option value="4">4 </option>	
		</select>
		
		<div>{{$errors->first('size')}}</div>
	   
	</div>
	
	 <div class="col-md-4 form-group">
	 
	    	<label for="cost">Cost.<span class="text-danger">*</span></label>
	    	<input type="number" name="cost" class="form-control" placeholder="Cost" value="{{old('cost')}}" >
	    	 <div>{{$errors->first('cost')}}</div>
	    
	 </div>
	 </div>
	<div class="row">
	   <div class="form-group col-md-4">
	   	<label for="paymentmode">Payment Mode<span class="text-danger">*</span></label>
	    <select name="paymentmode_id" id="paymentmode_id" class="form-control">
	   		<option value="">--- Select Payment Mode ---</option>
                    @foreach ($paymentmodes as $paymentmode)
                    <option value="{{$paymentmode->id}}">{{ $paymentmode->name}}</option>
                    @endforeach
		</select>
	   			<div>{{$errors->first('paymentmode')}}</div>

	   </div>

	   <div class="form-group col-md-4">
	   	<label for="amount">Amount Paid<span class="text-danger">*</span></label>
	   	<input type="number" name="amount" class="form-control" placeholder="Amount paid" value="{{old('amount')}}">
	   	<div>{{$errors->first('amount')}}</div>
	   </div>
       
       <div class="form-group col-md-4">
       	<label for="reference">Reference <span class="text-danger">*</span></label>
       	<input type="text" name="reference" class="form-control" placeholder="reference" value="{{old('reference')}}">
       	<div>{{$errors->first('reference')}}</div>
       </div>
	</div>
	<div class="row">
		<div class="form-group col-md-4">
			<label for="narration">Narration</label>
			<input type="text" name="narration" class="form-control" placeholder="Narration" value="{{old('narration')}}" >
		</div>
		<div class="form-group col-md-8">
			<label for="amountinwords">Amount in Words</label>
			<input type="text" name="amountinwords" class="form-control" placeholder="Amount in Words" value="{{old('amountinwords')}}" disabled="true">
		</div>
	</div>
 <div class="box-footer">
        <a href="/landtrx/create" class="btn btn-secondary">Cancel</a>
  	    <button type="submit" class="btn btn-primary " > Add </button>

       </div>
		</form>

	</div>
</div>
@endsection