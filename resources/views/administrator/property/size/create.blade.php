@extends('layouts.app')
@section('title','Add New Propert Sizes')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Add New Property Sizes</div>
				<div class="form">
					<form action="{{route('size.store')}}" method="POST">
						@include('partials.SizeForm')	

				    <div class="box-footer">
				        <cancle-button text="Cancel"  type="reset" ></cancle-button>
				        <my-button type="submit" text="Add"></my-button>

				       </div>
					</form>	
					</div>


            </div>
        </div>
    </div>
</div>
@endsection
