@extends('layouts.app')
@section('title', $plotno->size->name.' Edit Plot Numbers')
@section('content')
<div class="row">
	<div class="col-12">
	<h5>Edit {{$plotno->location->name}} {{$plotno->size->name}} Plot Numbers</h5>	
	</div>
</div>
<form method="POST" action="/plots/{{$plotno->id}}">
	@csrf
	@method('PATCH')
	<div class="row">
		<div class="col-md-4 form-group">	
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


 

@endsection