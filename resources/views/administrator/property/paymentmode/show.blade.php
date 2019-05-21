@extends('layouts.app')
@section('title',$paymentMode->name. ' Details')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{$paymentMode->name}} Details
             <a href="{{route('paymentMode.edit',['paymentMode'=>$paymentMode])}}">Edit</a>
	      </div>
				<div class="col-12">
					<p><strong>Name:</strong>{{$paymentMode->name}}</p>

				</div>
				<form action="{{route('paymentMode.destroy',['paymentMode'=>$paymentMode])}}" method="POST">
					@csrf
					@method('DELETE')
				   <button type="submit" class="btn btn-danger">Delete</button>
					
				</form>


            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('content')


<div class="row">


</div>

 

@endsection --}}