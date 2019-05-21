@extends('layouts.app')
@section('title','Plot Numbers')

@section('content')
<h4>Plot Numbers</h4>
<h5><a class="nav-link" href="/plots/create">Add Plot Numbers</a></h5>

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

@endsection