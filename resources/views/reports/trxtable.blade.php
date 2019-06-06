      <table>
				<thead>
				<tr>
				<th>Date</th>
				<th >Receiptno</th>
			    <th >Name</th>
			    <th >Type</th>
			    <th >Location</th>
			    <th >Size</th>
			    <th >Mode</th>
			    <th >Plotno</th>
			    <th >Amount</th>
			    <th >Created by</th>

			  </tr>
			</thead>
			<tbody>

			  @foreach($trxs as $trx)
			 <tr>
			 	<td>{{$trx->date}}</td>
			 	<td>{{$trx->receiptno}}</td>
			 	<td>{{$trx->client->name}}</td>
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