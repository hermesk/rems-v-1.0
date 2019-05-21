@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
             <div class="card-header">Add Property  Details</div>

                <div><a href="{{route('location.index')}}">Locations</a></div>
				<div><a href="/plots">Plot Numbers</a></div>
				<div><a href="{{route('size.index')}}">Plot Sizes</a></div>
				<div><a href="{{route('paymentMode.index')}}">Payment Modes</a></div>

            </div>
        </div>
    </div>
</div>
@endsection
