@extends('layouts.app')
@section('title','Available Plot Numbers')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
			<table>
			<thead>
				<tr>
			    <th width="20%">Location</th>
			    <th width="20%">Size</th>
			    <th width="20%">Plot Number</th>
			    <th width="20%">Cost</th>
			    <th width="20%">Status</th>

			  </tr>
			</thead>
			<tbody>

			  @foreach($plotnos as $plot)
			 <tr>
			 	<td>
			 {{-- 	<a href="/plots/{{$plot->id}}">{{$plot->location->name}}</a> --}}
			 	{{$plot->location->name}}
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
			 	<td>
			 		{{$plot->status ? 'Taken':'Available'}}
			 	</td>
			 </tr>
			    @endforeach
			    </tbody>
			</table>
			<div class="row">
            	<div class="col-12 d-flex justify-content-center pt-4">
            		{{$plotnos->links()}}
            	</div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
