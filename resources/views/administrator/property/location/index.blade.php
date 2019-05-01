@extends('layouts.layout')
@section('title','Property Locations')

@section('content')
<h4>Property Locations</h4>
<h5><a class="nav-link" href="/location/create">Add new Location</a></h5>

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
 	<a href="/location/{{$location->id}}">{{$location->name}}</a>
 	</td>
 </tr>
    @endforeach
    </tbody>
</table>

@endsection