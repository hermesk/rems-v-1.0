@extends('layouts.layout')
@section('title','Clients List')

@section('content')
<h4>Clients List</h4>

  @foreach($clients as $client)

    <li>{{$client->name}}
    {{$client->mobile}}</li>

    @endforeach

@endsection