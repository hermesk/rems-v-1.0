@extends('layouts.app')
@section('title','Edit Details for'.$size->name)
@section('content')
<div class="row">
	<div class="col-12">
	<h5>Edit Details for {{$size->name}}</h5>	
	</div>
</div>


<div class="row">

<div class="col-12">
 <form action="{{route('size.update',['size'=>$size])}}" method="POST">
       @method('PATCH')
      @include('partials.SizeForm')

  	 <div class="box-footer">
       <my-button type="submit" text="Update"></my-button>
       </div>

  </form>

	</div>
</div>

 

@endsection