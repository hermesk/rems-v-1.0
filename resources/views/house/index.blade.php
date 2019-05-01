@extends('layouts.layout')
@section('title','House Transactions List')

@section('content')
<h2>House Transactions List</h2>

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

  @foreach($housetrxs as $housetrx)
 <tr>
 	<td>{{$housetrx->name}}</td>
 	<td>{{$housetrx->location}}</td>
 	<td>{{$housetrx->size}}</td>
 	<td>{{$housetrx->plotno}}</td>
 	<td>{{$housetrx->cost}}</td>
 	<td>{{$housetrx->amount}}</td>
 </tr>
    @endforeach
    </tbody>
</table>

@endsection