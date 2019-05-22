  	@csrf
  	
	    <div class="row form-group col-md-12">  	
		<label for="name">Name<span class="text-danger">*</span></label>
		<input  type="text" name="name" class="form-control" placeholder="name" value="{{old('name') ?? $client->name}}">
		     <div>{{$errors->first('name')}}</div>

	    </div>

	    <div class="row form-group col-md-12">
	    	<label for="idno">ID No.<span class="text-danger">*</span></label>
	    	<input type="number" name="idno" class="form-control" placeholder="ID number" value="{{old('idno') ?? $client->idno}}" >
	    	 <div>{{$errors->first('idno')}}</div>
	    </div>
	        
	    <div class="row form-group col-md-12">
	    	<label for="mobile">Mobile No.<span class="text-danger">*</span></label>
	    	<input type="number" name="mobile" class="form-control" placeholder="mobile number" value="{{old('mobile') ?? $client->mobile}}" >
	    	     <div>{{$errors->first('mobile')}}</div>

	    </div>
