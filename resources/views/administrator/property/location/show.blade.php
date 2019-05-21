@extends('layouts.app')
@section('title',$location->name. ' Details')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$location->name}} Details</h5>	
	<p><a href="{{route('location.edit',['location'=>$location])}}">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Name:</strong>{{$location->name}}</p>

</div>
<form action="{{route('location.destroy',['location'=>$location])}}" method="POST">
	@csrf
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form>
</div>

 

@endsection