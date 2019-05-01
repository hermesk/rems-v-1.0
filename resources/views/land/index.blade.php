@extends('layouts.layout')
@section('title','Land Transactions List')

@section('content')
<h4>Land Transactions List</h4>
<table>
	<thead>
	<tr>
    <th width="20%">Name</th>
    <th width="20%">Location</th>
    <th width="10%">Size</th>
    <th width="10%">Plot No</th>
    <th width="15%">Cost</th>
    <th width="15%">Amount Paid</th>
  </tr>
</thead>
<tbody>

  @foreach($landtrxs as $landtrx)
 <tr>
 	<td>{{$landtrx->name}}</td>
 	<td>{{$landtrx->location}}</td>
 	<td>{{$landtrx->size}}</td>
 	<td>{{$landtrx->plotno}}</td>
 	<td>{{$landtrx->cost}}</td>
 	<td>{{$landtrx->amount}}</td>
 </tr>
    @endforeach
    </tbody>
</table>
  

@endsection