@extends('layouts.app')
@section('title','Payment Type')
   @section('content')
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		             <div class="card-header">Payment Type
                 <a class="nav-link" href="{{route('paymentType.create')}}">+Add</a>
		             </div>
					<table>
						<thead>
						<tr>
					    <th>Name</th>
					  </tr>
					</thead>
					<tbody>

					  @foreach($paymentTypes as $paymentType)
					 <tr>
					 	<td>
					 	<a href="{{route('paymentType.show',['paymentType'=>$paymentType])}}">{{$paymentType->name}}</a>
					 
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
