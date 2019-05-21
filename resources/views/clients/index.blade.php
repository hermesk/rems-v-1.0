@extends('layouts.app')
@section('title','Clients List')

@section('content')
<h4>Clients List</h4>
<h3><a class="nav-link" href="{{route('clients.create')}}">Add new Client</a></h3>

<table>
	<thead>
	<tr>
    <th width="20%">Name</th>
    <th width="20%">ID No</th>
    <th width="10%">Mobile No</th>

  </tr>
</thead>
<tbody>

  @foreach($clients as $client)
 <tr>
 	<td>
 	<a href="{{route('clients.show',['client'=>$client])}}">{{$client->name}}</a>
 	</td>
 	<td>{{$client->idno}}</td>
 	<td>{{$client->mobile}}</td>

 </tr>
    @endforeach
    </tbody>
</table>

@endsection