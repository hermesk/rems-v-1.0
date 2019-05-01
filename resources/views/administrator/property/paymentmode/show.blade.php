@extends('layouts.layout')
@section('title',$paymentmode->name. ' Details')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$paymentmode->name}} Details</h5>	
	<p><a href="/payment-mode/{{$paymentmode->id}}/edit">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Name:</strong>{{$paymentmode->name}}</p>

</div>
<form action="/payment-mode/{{$paymentmode->id}}" method="POST">
	@csrf
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form>
</div>

 

@endsection