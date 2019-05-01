@extends('layouts.layout')
@section('title','Edit Details for'.$client->name)
@section('content')
<div class="row">
	<div class="col-12">
	<h5>Edit Details for {{$client->name}}</h5>	
	</div>
</div>


<div class="row">

<div class="col-12">
 <form action="/clients/{{$client->id}}" method="POST">
       @method('PATCH')
      @include('partials.client_form')

  	 <div class="box-footer">

  	    <button type="submit" class="btn btn-primary " > Update  </button>

       </div>

  </form>

	</div>
</div>

 

@endsection