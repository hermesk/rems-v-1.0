@extends('layouts.app')
@section('title','Plot Numbers')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Plot Numbers
            <a class="nav-link" href="/plots/create">+Add</a>
             </div>
			<table>
			<thead>
				<tr>
			    <th width="20%">Location</th>
			    <th width="20%">Size</th>
			    <th width="20%">Plot numbers</th>
			    <th width="20%">Cost</th>

			  </tr>
			</thead>
			<tbody>

			  @foreach($plotnos as $plot)
			 <tr>
			 	<td>
			 	<a href="/plots/{{$plot->id}}">{{$plot->location->name}}</a>
			 	
			 	</td>
			 
			 	<td>
			 		{{$plot->size->name}}
			 	</td>
			 
			 	<td>
			 		{{$plot->plotno}}
			 	</td>
			 
			 	<td>
			 		{{$plot->cost}}
			 	</td>
			 </tr>
			    @endforeach
			    </tbody>
			</table>
            </div>
        </div>
    </div>
</div>
@endsection
