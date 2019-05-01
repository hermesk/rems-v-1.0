@extends('layouts.layout')
@section('title','Edit Details for'.$size->name)
@section('content')
<div class="row">
	<div class="col-12">
	<h5>Edit Details for {{$size->name}}</h5>	
	</div>
</div>


<div class="row">

<div class="col-12">
 <form action="/size/{{$size->id}}" method="POST">
       @method('PATCH')
      @include('partials.SizeForm')

  	 <div class="box-footer">

  	    <button type="submit" class="btn btn-primary " > Update  </button>

       </div>

  </form>

	</div>
</div>

 

@endsection