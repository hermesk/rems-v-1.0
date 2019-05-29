@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Transaction Receipt</div>

                <div class="card-body">
            <table> 
              <tr>
                <td align="center" >
                <font size="0.5">HEAD OFFICE<br/>
                NJENGI HOUSE,5TH FLOOR<br/>
                TOM MBOYA STREET, NAIROBI<br/>
                0746 517010<br/> <font>
                </td>
                <td>
                {{-- <img src="images/gakuyo.png"  /> --}}
                 <font size="0.5"><P><b>YOUR SOLUTION IN LAND & HOME CONSULTANCY</b></P>
                 </font>
                </td>
                <td align="center" >
                <font size="0.5">HEAD OFFICE<br/>
                NJENGI HOUSE,5TH FLOOR<br/>
                TOM MBOYA STREET, NAIROBI<br/>
                0746 517010<br/> <font>
                </td>
                <td>
            </tr>                    
            <tr><th>Receipt No:</th><td>{{$receipt['rctno']}}</td></tr>
        
            <tr><th>Transaction Date:</th><td>{{$receipt['date']}}</td>
            <tr><th>Name:</th><td>{{$receipt['name']}}</td></tr>
            <tr><th>Being Payment of:</th><td>{{$receipt['ptype']}}</td>
                <th>Location:</th><td>{{$receipt['location']}}</td>
            </tr>
            <tr><th>Size:</th><td>{{$receipt['size']}}</td>
                <th>Plot No:</th><td>{{$receipt['plotno']}}</td></tr>
            <tr><th>Cost:</th><td>{{$receipt['cost']}}</td>
             <th>Amount Paid:</th><td>{{$receipt['amount']}}</td></tr>
            <tr><th>Payment Mode:</th><td>{{$receipt['pmode']}}</td>
            <th>Description:</th><td>{{$receipt['narr']}}</td></tr>
            <tr><th>Amount in Words:</th><td>{{$receipt['amountinWords']}}</td></tr>
            <tr><th>Deposited by</th><th>......................................</th>
                <th>Signature ............................</th>
            </tr>
              
            </table>
                </div>
                <div>You were Served by {{ Auth::user()->name }}  {{date('Y-m-d H:i:s')}}</div>
            </div>
        </div>
    </div>
</div>
@endsection



