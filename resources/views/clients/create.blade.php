@extends('layouts.app')
@section('title','Add New Client')

<div class="container">
  @section('content')
<div class="row">
  <div class="col-12">
  <h1>Add New Client</h1> 
  </div>
</div>



<div class="form">
 <form action="{{route('clients.store')}}" method="POST">
      @include('partials.client_form')

     <div class="box-footer">
        <cancle-button text="Cancel"  type="reset" ></cancle-button>
       <my-button type="submit" text="Add"></my-button>

  
       </div>

  </form>

  </div>

@endsection
</div>