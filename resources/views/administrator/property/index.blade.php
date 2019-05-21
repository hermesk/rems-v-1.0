@extends('layouts.app')
@section('content')
<h1>Add Property  Details</h1>

<div><a href="{{route('location.index')}}">Locations</a></div>
<div><a href="/plots">Plot Numbers</a></div>
<div><a href="{{route('size.index')}}">Plot Sizes</a></div>
<div><a href="{{route('paymentMode.index')}}">Payment Modes</a></div>

@endsection