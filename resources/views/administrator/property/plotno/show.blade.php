@extends('layouts.app')
@section('title', $plotno->size->name.' Plot Numbers')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{$plotno->size->name}} Plot Numbers
              <a href="/plots/{{$plotno->id}}/edit">Edit</a>
             </div>
			<div class="col-12">
				<p><strong>Location:</strong>{{$plotno->location->name}}</p>
				<p><strong>Size:</strong>{{$plotno->size->name}}</p>
				<p><strong>Plot Numbers:</strong>{{$plotno->plotno}}</p>

			</div>


            </div>
        </div>
    </div>
</div>
@endsection
