@extends('layouts.app')
@section('title',$paymentType->name. ' Details')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{$paymentType->name}} Details
             <a href="{{route('paymentType.edit',['paymentType'=>$paymentType])}}">Edit</a>
             </div>
			<div class="row">

			<div class="col-12">
				<p><strong>Name:</strong>{{$paymentType->name}}</p>

			</div>
			<form action="{{route('paymentType.destroy',['paymentType'=>$paymentType])}}" method="POST">
				@csrf
				@method('DELETE')
			   <button type="submit" class="btn btn-danger">Delete</button>
				
			</form>
			</div>
            </div>
        </div>
    </div>
</div>
@endsection
