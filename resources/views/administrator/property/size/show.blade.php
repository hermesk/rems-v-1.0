@extends('layouts.layout')
@section('title',$size->name. ' Details')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$size->name}} Details</h5>	
	<p><a href="/size/{{$size->id}}/edit">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Name:</strong>{{$size->name}}</p>

</div>
<form action="/size/{{$size->id}}" method="POST">
	@csrf
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form>
</div>

 

@endsection