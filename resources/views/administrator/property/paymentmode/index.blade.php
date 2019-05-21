@extends('layouts.app')
@section('title','Payment Modes')

@section('content')
<h4>Payment Modes</h4>
<h5><a class="nav-link" href="{{route('paymentMode.create')}}">Add new Payment Mode</a></h5>

<table>
	<thead>
	<tr>
    <th>Name</th>
  </tr>
</thead>
<tbody>

  @foreach($paymentModes as $paymentMode)
 <tr>
 	<td>
 	<a href="{{route('paymentMode.show',['paymentMode'=>$paymentMode])}}">{{$paymentMode->name}}</a>
 	</td>
 </tr>
    @endforeach
    </tbody>
</table>

@endsection