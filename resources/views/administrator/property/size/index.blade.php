@extends('layouts.layout')
@section('title','Property Size')

@section('content')
<h4>Property Size</h4>
<h5><a class="nav-link" href="/size/create">Add new Property Size</a></h5>

<table>
	<thead>
	<tr>
		<th width="20%">Size</th>
        <th width="20%">Location id</th>
    
  </tr>
</thead>
<tbody>

  @foreach($sizes as $size)
 <tr>
 	<td><a href="/size/{{$size->id}}">{{$size->name}}</a></td>
 	<td>
 	{{$size->location_id}}
 	</td>
 
 </tr>
    @endforeach
    </tbody>
</table>

@endsection