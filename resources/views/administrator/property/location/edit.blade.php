@extends('layouts.app')
@section('title',$location->name.'Location')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		  <div class="card-header">Edit Details for {{$location->name}}</div>
			<div class="form">
					<form action="{{route('location.update',['location'=>$location])}}" method="POST">
			          @csrf
			          @method('PATCH')

			         <div class="row form-group col-md-12 ">  	
					   <label for="name">Location<span class="text-danger">*</span></label>
					   <input  type="text" name="name" class="form-control" placeholder="location name" value="{{old('name')?? $location->name}}">
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

