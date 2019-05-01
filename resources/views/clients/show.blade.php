@extends('layouts.layout')
@section('title',$client->name. ' Details')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$client->name}} Details</h5>	
	<p><a href="/clients/{{$client->id}}/edit">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Name:</strong>{{$client->name}}</p>
	<p><strong>Id No:</strong>{{$client->idno}}</p>
	<p><strong>Mobile:</strong>{{$client->mobile}}</p>

</div>
<form action="/clients/{{$client->id}}" method="POST">
	@csrf
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form>
</div>

 

@endsection