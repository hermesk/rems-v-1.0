@extends('layouts.app')
@section('title',$paymentType->name.'paymentType')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		  <div class="card-header">Edit Details for {{$paymentType->name}}</div>
			<div class="form">
					<form action="{{route('paymentType.update',['paymentType'=>$paymentType])}}" method="POST">
			          @csrf
			          @method('PATCH')

			         <div class="row form-group col-md-12 ">  	
					   <label for="name">Payment Type<span class="text-danger">*</span></label>
					   <input  type="text" name="name" class="form-control" placeholder="paymentType name" value="{{old('name')?? $paymentType->name}}">
					     <div>{{$errors->first('name')}}</div>
				    </div>
				      <div class="row form-group col-md-12 ">  	
					   <label for="name">Type<span class="text-danger">*</span></label>
					 <select name="type" id="type" class="form-control">
                        <option value="">Select</option>
                        <option value="1">Income</option>
                        <option value="2">Expence</option>    
                    </select>
					     <div>{{$errors->first('type')}}</div>
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

