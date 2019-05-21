@extends('layouts.app')
@section('title','Payment Modes')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Payment Modes
             <a class="nav-link" href="{{route('paymentMode.create')}}">+Add</a>
             </div>
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

            </div>
        </div>
    </div>
</div>
@endsection




