@extends('layouts.app')
@section('title',$paymentMode->name.'Location')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Edit Details for {{$paymentMode->name}}</div>

			<div class="form">
					<form action="{{route('paymentMode.update',['paymentMode'=>$paymentMode])}}" method="POST">
			          @csrf
			          @method('PATCH')

			         <div class="row form-group col-md-12 ">  	
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
        </div>
    </div>
</div>
@endsection
