@extends('layouts.app')
@section('title','Payments')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Payments
     
             <h6><a class="nav-link" href="{{route('payments.create')}}">+Add</a></h6>
            
             </div>
             <table>
				<thead>
				<tr>
			    <th width="20%">Name</th>
			    <th width="10%">Amount</th>
			    <th width="20%">Payment for</th>
			    <th width="20%">Payment Mode</th>
			  </tr>
			</thead>
			<tbody>

			  @foreach($payments as $payment)
			 <tr>
			 	<td>{{$payment->name}}</td>
			 	{{-- <td>{{$payment->client->name}} --}}
			 	{{-- <a href="{{route('clients.show',['client'=>$client])}}">
			 		{{$payment->client->name}}</a> 
<td>{{$payment->paymentType->name}}</td>
			 		--}}
			 	</td>
			 	
			 	<td>{{$payment->amount}}</td>
			 	<td>{{$payment->paymentType->name}}</td>
			 	<td>{{$payment->paymentMode->name}}</td>

			 </tr>
			    @endforeach
			    </tbody>
            </table>
            <div class="row">
            	<div class="col-12 d-flex justify-content-center pt-4">
            		{{-- {{$payments->links()}} --}}
            	</div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
