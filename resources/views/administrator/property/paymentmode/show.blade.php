@extends('layouts.app')
@section('title',$paymentMode->name. ' Details')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$paymentMode->name}} Details</h5>	
	<p><a href="{{route('paymentMode.edit',['paymentMode'=>$paymentMode])}}">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Name:</strong>{{$paymentMode->name}}</p>

</div>
<form action="{{route('paymentMode.destroy',['paymentMode'=>$paymentMode])}}" method="POST">
	@csrf
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form>
</div>

 

@endsection