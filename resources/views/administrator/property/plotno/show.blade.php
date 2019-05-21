@extends('layouts.app')
@section('title', $plotno->size->name.' Plot Numbers')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>{{$plotno->size->name}} Plot Numbers</h5>	
	<p><a href="/plots/{{$plotno->id}}/edit">Edit</a></p>
	</div>
</div>


<div class="row">

<div class="col-12">
	<p><strong>Location:</strong>{{$plotno->location->name}}</p>
	<p><strong>Size:</strong>{{$plotno->size->name}}</p>
	<p><strong>Plot Numbers:</strong>{{$plotno->plotno}}</p>

</div>
{{-- <form action="/clients/{{$client->id}}" method="POST">
	@csrf $plotno->size_id. '
	@method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
	
</form> --}}
</div>

 

@endsection