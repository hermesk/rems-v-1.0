@extends('layouts.app')
@section('title', $plotno->size->name.' Edit Plot Numbers')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Edit {{$plotno->location->name}} {{$plotno->size->name}} Plot Numbers</div>
            <div class="form">
            	<form method="POST" action="/plots/{{$plotno->id}}">
				@csrf
				@method('PATCH')
				<div class="row">
					<div class="col-md-12 form-group">	
					<label for="plotno">Plot Numbers<span class="text-danger">*</span></label>
					<input  type="text" name="plotno" class="form-control" placeholder="plotnos" 
					value="{{old('plotno')?? $plotno->plotno}}">
					<div>{{$errors->first('plotnos')}}</div>	  
				    </div>
				</div>

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
