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
            @include('reports.transactions.pmntable')
            <div class="row">
            	<div class="col-12 d-flex justify-content-center pt-4">
            		{{$payments->links()}}
            	</div>
            </div>
                <div class="col-12 d-flex justify-content-end pt-2">
                <div class="px-2">
                      <button id="print">
                             <a href="" @click.prevent="printme" target="_blank" class="fa fa-print"><i class="fa fa-print"></i> Print</a>
                       </button>
                </div>
                <div class=" px-2" id="excel">
             	<a href="{{ url('excel-export-payments') }}" class="btn btn-success ">Export to excel</a>
             	</div>
             	{{-- <div class="px-2" id="pdf">
             	<a href="{{ url('pdf-export') }}" class="btn btn-danger">Export to pdf</a>
             	</div>  --}}                
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
