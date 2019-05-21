@extends('layouts.app')
@section('title',$location->name. ' Details')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{$location->name}} Details
             <a href="{{route('location.edit',['location'=>$location])}}">Edit</a>
             </div>
			<div class="row">

			<div class="col-12">
				<p><strong>Name:</strong>{{$location->name}}</p>

			</div>
			<form action="{{route('location.destroy',['location'=>$location])}}" method="POST">
				@csrf
				@method('DELETE')
			   <button type="submit" class="btn btn-danger">Delete</button>
				
			</form>
			</div>
            </div>
        </div>
    </div>
</div>
@endsection
