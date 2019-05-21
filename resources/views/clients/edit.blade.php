@extends('layouts.app')
@section('title','Edit Details for ' .$client->name)
<div  class= "container">
  @section('content')

  <div class="col-12">
  <h5>Edit Details for {{$client->name}}</h5> 
  </div>
  <div class="form">
       <form action="{{route('clients.update',['client'=>$client])}}" method="POST">
             @method('PATCH')
            @include('partials.client_form')

        <my-button type="submit" text="Update"></my-button>


        </form>

  </div>

</div>

 

@endsection