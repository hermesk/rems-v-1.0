@extends('layouts.app')
@section('title','Add New Location')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Add New Location</div>
                 <div class="form">
				<form action="{{route('location.store')}}" method="POST">
			          @csrf

			         <div class="row form-group col-md-12 ">  	
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
        </div>
    </div>
</div>
@endsection
