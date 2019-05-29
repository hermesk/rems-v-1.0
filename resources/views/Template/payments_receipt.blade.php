@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Receipt</div>

                <div class="card-body">
            <table> 
            {{--   <tr>
                <td align="center" >
                <font size="0.5">HEAD OFFICE<br/>
                YALA TOWERS,6TH FLOOR<br/>
                BIASHARA STREET, NAIROBI<br/>
                0800 721 251<br/> <font>
                </td>
                <td>
                <img src="images/gakuyo.png"  />
                 <font size="0.5"><P><b>WHERE TRUST MEETS YOUR VISION</b></P>
                 </font>
                </td>
                <td align="center">
                <font size="0.5">THIKA OFFICE<br/>
                TUSKYS CHANIA,3rd FLOOR<br/>
                GATITU JUNCTION.<br/>
                0800 721 250<br/>
                <font>
                </td>
            </tr> --}}                    
                <h4>Payment Receipt</h4>
{{--                 <tr><th>Receipt No:</th><td>{{$receipt['rctno']}}</td></tr>
 --}}                <tr><th>Transaction Date:</th><td>{{ date('Y-m-d H:i:s') }}</td></tr>
                <tr><th>Name:</th><td>{{$receipt['name']}}</td></tr>
                <tr><th>Mobile:</th><td>{{$receipt['mobile']}}</td></tr>
                <tr><th>Amount Paid:</th><td>{{$receipt['amount']}}</td></tr>
                <tr><th>Payment Mode:</th><td>{{$receipt['pmode']}}</td></tr>
                <tr><th>Being Payment of:</th><td>{{$receipt['ptype']}}</td></tr>
                <tr><th>Narration:</th><td>{{$receipt['narr']}}</td></tr>
                <tr><th>Amount in Words:</th><td>{{$receipt['amountinWords']}}</td></tr>               
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

