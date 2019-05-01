@extends('layouts.layout')
@section('title','Add New Propert Sizes')
@section('content')
<div class="row">
	<div>
	<h1>Add New Property Sizes</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
	<form action="/size" method="POST">
		@include('partials.SizeForm')	

    <a href="/size/create" class="btn btn-secondary">Cancel</a>
  	<button type="submit" class="btn btn-primary " > Add </button>	
	</form>	
	</div>	
</div>
@endsection