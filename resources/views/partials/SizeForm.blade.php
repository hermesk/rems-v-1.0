          @csrf
   	 <div class="row form-group col-md-4">  	
		<label for="location">Location<span class="text-danger">*</span></label>
		<select name="location_id" id="location_id" class="form-control">
			<option value="">Select location</option>
			@foreach($locations as $location)
			<option value="{{$location->id}}">{{$location->name}}</option>
			@endforeach
		</select>
		     <div>{{$errors->first('location_id')}}</div>
	 </div>
         <div class="row form-group col-md-4 ">  	
		   <label for="name">Size<span class="text-danger">*</span></label>
		   <input  type="text" name="name" class="form-control" placeholder="name of the size" value="{{old('name')?? $size->name}}">
		     <div>{{$errors->first('name')}}</div>
	    </div>	

	      <div class="box-footer">


       </div>