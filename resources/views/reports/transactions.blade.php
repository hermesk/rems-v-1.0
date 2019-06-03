@extends('layouts.app')
@section('title','Transactions')

@section('content')
<div class="container">
	<div class="col-md-4">
		<form action="/search" method="GET">
			<div class="input-group">
				<input type="search" name="search" class="form-control">
				<span class="input-group-prepend">
					<button type="submit" class="btn btn-primary">Search</button>
				</span>
			</div>
		</form>
	</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header">Transactions</div>
             <table>
				<thead>
				<tr>
				<th width="10%">Receiptno</th>
			    <th width="20%">Name</th>
			    <th width="10%">Type</th>
			    <th width="10%">Location</th>
			    <th width="10%">Size</th>
			    <th width="10%">Mode</th>
			    <th width="10%">Plotno</th>
			    <th width="10%">Amount</th>
			    <th width="10%">Created by</th>

			  </tr>
			</thead>
			<tbody>

			  @foreach($trxs as $trx)
			 <tr>
			 	<td>{{$trx->receiptno}}</td>
			 	<td>{{$trx->client_id}}</td>
			 	<td>{{$trx->paymentType->name}}</td>
			 	<td>{{$trx->location->name}}</td>
			 	<td>{{$trx->size->name}}</td>
			 	<td>{{$trx->mode->name}}</td>
			 	<td>{{$trx->plotno}}</td>
			 	<td>{{$trx->amount}}</td>
			 	<td>{{$trx->created_by}}</td>

			 </tr>
			    @endforeach
			    </tbody>
            </table>
            <div class="row">
            	<div class="col-12 d-flex justify-content-center pt-4">
            		{{$trxs->links()}}
            	</div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
