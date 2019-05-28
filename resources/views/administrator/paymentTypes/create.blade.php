@extends('layouts.app')
@section('title','Add New Payment Type')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Add New Payment Type</div>
                 <div class="form">
				<form action="{{route('paymentType.store')}}" method="POST">
			          @csrf

			         <div class="row form-group col-md-12 ">  	
					   <label for="name">Payment Name<span class="text-danger">*</span></label>
					   <input  type="text" name="name" class="form-control" placeholder="payment type" value="{{old('name')}}">
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
			        <cancle-button text="Cancel"  type="reset" ></cancle-button>
			        <my-button type="submit" text="Add"></my-button>

			       </div>				
			  </form>		
              </div>


            </div>
        </div>
    </div>
</div>
@endsection
