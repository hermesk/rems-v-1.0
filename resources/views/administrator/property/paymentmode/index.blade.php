@extends('layouts.layout')
@section('title','Payment Modes')

@section('content')
<h4>Payment Modes</h4>
<h5><a class="nav-link" href="/payment-mode/create">Add new Payment Mode</a></h5>

<table>
	<thead>
	<tr>
    <th>Name</th>
  </tr>
</thead>
<tbody>

  @foreach($paymentmodes as $paymentmode)
 <tr>
 	<td>
 	<a href="/payment-mode/{{$paymentmode->id}}">{{$paymentmode->name}}</a>
 	</td>
 </tr>
    @endforeach
    </tbody>
</table>

@endsection