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
            {{-- <a href="{{ url('export-view') }}" class="btn btn-primary">Export to csv</a> --}}