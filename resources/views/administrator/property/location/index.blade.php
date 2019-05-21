@extends('layouts.app')
@section('title','Property Locations')
   @section('content')
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		             <div class="card-header">Property Locations
                 <a class="nav-link" href="{{route('location.create')}}">+Add</a>
		             </div>
					<table>
						<thead>
						<tr>
					    <th>Name</th>
					  </tr>
					</thead>
					<tbody>

					  @foreach($locations as $location)
					 <tr>
					 	<td>
					 	<a href="{{route('location.show',['location'=>$location])}}">{{$location->name}}</a>
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
