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
                <image img src="public/images/logo.png" alt="Logo"></image>
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
            <tr><th>Receipt No:</th><td>{{$receipt['receiptno']}}</td></tr>
        
            <tr><th>Transaction Date:</th><td>{{$receipt['date']}}</td>
            <tr><th>Name:</th><td>{{$receipt['name']}}</td></tr>
            <tr><th>Being Payment of:</th><td>{{$receipt['type']}}</td>
                <th>Location:</th><td>{{$receipt['location']}}</td>
            </tr>
            <tr><th>Size:</th><td>{{$receipt['size']}}</td>
                <th>Plot No:</th><td>{{$receipt['plotno']}}</td></tr>
            <tr><th>Cost:</th><td>{{$receipt['cost']}}</td>
             <th>Amount Paid:</th><td>{{$receipt['amount']}}</td></tr>
            <tr><th>Payment Mode:</th><td>{{$receipt['mode']}}</td>
            <th>Description:</th><td>{{$receipt['narration']}}</td></tr>
            <tr><th>Amount in Words:</th><td>{{$receipt['amount_in_words']}}</td></tr>
            <tr><th>Deposited by</th><th>.............................................................</th>
                <th>Signature ............................</th>
            </tr>
            </table>
            <div>You were Served by {{ Auth::user()->username }}{{date('Y-m-d H:i:s')}}</div>
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






