@extends('layouts.app')
@section('title',$size->name. ' Details')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{$size->name}} Details
				<a href="{{route('size.edit',['size'=>$size])}}">Edit</a>
             </div>
			<div class="row">

			<div class="col-12">
				<p><strong>Name:</strong>{{$size->name}}</p>

			</div>
			<form action="{{route('size.destroy',['size'=>$size])}}" method="POST">
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
