@extends('layouts.app')
@section('title','Add New Propert Sizes')
@section('content')
<div class="row">
	<div>
	<h1>Add New Property Sizes</h1>	
	</div>
</div>
<div class="row">
	<div class="col-12">
	<form action="{{route('size.store')}}" method="POST">
		@include('partials.SizeForm')	

    <div class="box-footer">
        <cancle-button text="Cancel"  type="reset" ></cancle-button>
        <my-button type="submit" text="Add"></my-button>

       </div>
	</form>	
	</div>	
</div>
@endsection