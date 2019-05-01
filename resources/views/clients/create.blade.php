@extends('layouts.layout')
@section('title','Add New Client')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>Add New Client</h1>	
	</div>
</div>


<div class="row">

<div class="col-12">
 <form action="/clients" method="POST">
      @include('partials.client_form')

  	 <div class="box-footer">
        <a href="/clients/create" class="btn btn-secondary">Cancel</a>
  	    <button type="submit" class="btn btn-primary " > Add </button>

       </div>

  </form>

	</div>
</div>

 

@endsection