@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
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
                <h4>Payment Receipt</h4>
                <tr><th>Receipt No:</th><td>{{$receipt['receiptno']}}</td></tr>
                <tr><th>Transaction Date:</th><td>{{ date('Y-m-d H:i:s') }}</td></tr>
                <tr><th>Name:</th><td>{{$receipt['name']}}</td></tr>
                <tr><th>Mobile:</th><td>{{$receipt['mobile']}}</td></tr>
                <tr><th>Amount Paid:</th><td>{{$receipt['amount']}}</td></tr>
                <tr><th>Payment Mode:</th><td>{{$receipt['mode']}}</td></tr>
                <tr><th>Being Payment of:</th><td>{{$receipt['type']}}</td></tr>
                <tr><th>Narration:</th><td>{{$receipt['narration']}}</td></tr>
                <tr><th>Amount in Words:</th><td>{{$receipt['amount_in_words']}}</td></tr>               
            </table>
            <div>You were Served by {{ Auth::user()->name }}{{date('Y-m-d H:i:s')}}</div>
                </div>
            </div>
        </div>
    </div>
         <div class="row no-print justify-content-center">
           <button id="print">
                 <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
           </button>
         
       </div>
</div>
@endsection


