@extends('layouts.app')
@section('title','Add New Client')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">Add New Client</div>
                 <div class="form">
                   <form action="{{route('clients.store')}}" method="POST">
                      @include('partials.client_form')

                     <div class="box-footer">
                        <cancle-button text="Cancel"  type="reset" ></cancle-button>
                       <my-button type="submit" text="Add"></my-button>

                  
                       </div>

                  </form>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection


