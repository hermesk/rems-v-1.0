@extends('layouts.app')
@section('title',$paymentMode->name.'Location')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Edit Details for {{$paymentMode->name}}</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
		<form action="{{route('paymentMode.update',['paymentMode'=>$paymentMode])}}" method="POST">
          @csrf
          @method('PATCH')

         <div class="row form-group col-md-4 ">  	
		   <label for="name">Payment Mode<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="Payment Mode" value="{{old('name')?? $paymentMode->name}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	    <div class="box-footer">
            <my-button type="submit" text="Update"></my-button>
       </div>				
		</form>	
	</div>	
</div>
@endsection