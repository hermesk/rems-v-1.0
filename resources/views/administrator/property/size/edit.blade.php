@extends('layouts.app')
@section('title','Edit Details for'.$size->name)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Edit Details for {{$size->name}}</div>
              <div class="form">
               <form action="{{route('size.update',['size'=>$size])}}" method="POST">
                     @method('PATCH')
                    @include('partials.SizeForm')

                   <div class="box-footer">
                     <my-button type="submit" text="Update"></my-button>
                     </div>

                </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
