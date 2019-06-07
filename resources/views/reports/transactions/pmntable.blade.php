     <table>
				<thead>
				<tr>
			    <th >Name</th>
			    <th >Amount</th>
			    <th >Payment for</th>
			    <th >Payment Mode</th>
			  </tr>
			</thead>
			<tbody>

			  @foreach($payments as $payment)
			 <tr>
			 	<td>{{$payment->name}}</td>		 	
			 	<td>{{$payment->amount}}</td>
			 	<td>{{$payment->paymentType->name}}</td>
			 	<td>{{$payment->paymentMode->name}}</td>

			 </tr>
			    @endforeach
			    </tbody>
            </table>