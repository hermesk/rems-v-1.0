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

             @include('reports.trxtable')

            <div class="row">
            	{{-- <div class="col-12 d-flex justify-content-center pt-4">
            		{{$trxs->links()}}
            	</div> --}}

            </div>
            
             <div class="col-12 d-flex justify-content-end pt-2">
                <div class=" px-2">
             	<a href="{{ url('export_to_excel') }}" class="btn btn-success ">Export to excel</a>
             	</div>
             	<div class="px-2">
             	<a href="{{ url('pdf') }}" class="btn btn-danger">Export to pdf</a>
             	</div>                 
             </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
