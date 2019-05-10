@extends('layouts.layout')
@section('title','Transaction Receipt')

@section('content')
<h4>Transaction Receipt</h4>
<table>
    <tr><th>Transaction Date:</th><td>{{$receipt['date']}}</td></tr>
    <tr><th>Name:</th><td>{{$receipt['name']}}</td></tr>
    <tr><th>Property Type:</th><td>{{$receipt['property']}}</td>
    	<th>Location:</th><td>{{$receipt['location']}}</td>
    </tr>
    <tr><th>Size:</th><td>{{$receipt['size']}}</td></tr>
    <tr><th>Plot No:</th><td>{{$receipt['plotno']}}</td></tr>
    <tr><th>Cost:</th><td>{{$receipt['cost']}}</td></tr>
    <tr><th>Amount Paid:</th><td>{{$receipt['amount']}}</td></tr>
    <tr><th>Payment Mode:</th><td>{{$receipt['pmode']}}</td></tr>
    <tr><th>Description:</th><td>{{$receipt['narr']}}</td></tr>
    <tr><th>Amount in Words:</th><td>{{$receipt['amountinWords']}}</td></tr>

   
</table>
  

@endsection

