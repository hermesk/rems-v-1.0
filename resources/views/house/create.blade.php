@extends('layouts.layout')
@section('title','House transactions')
@section('content')
<div class="row">
	<div class="col-12">
	<h1>House transactions</h1>	
	</div>
</div>
<div class="row">

<div class="col-12">
<form action="/housetrx" method="POST">
			@csrf
	<div class="row">
	  <div class="col-md-4 form-group">
	    
	     <label for="idno">ID No.<span class="text-danger">*</span></label>
	    	<input type="number" name="idno" class="form-control" placeholder="ID number" value="{{old('idno')}}" >
	    	 <div>{{$errors->first('idno')}}</div>
	   
	 </div>

	<div class="col-md-4 form-group">	
		<label for="name">Name<span class="text-danger">*</span></label>
		<input  type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
		<div>{{$errors->first('name')}}</div>
	  
	</div>

	 <div class="form-group col-md-4">  	
		<label for="location">Select Location<span class="text-danger">*</span></label>
		<select name="location" id="location" class="form-control">
			<option value="">--- Select Location ---</option>
                    @foreach ($locations as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
		</select>
		     <div>{{$errors->first('location')}}</div>
	 </div>
	</div>
	<div class="row">
	<div class="col-md-4 form-group"> 	
	<label for="size">Select Size<span class="text-danger">*</span></label>
		<select name="size" id="size" class="form-control">

		</select>
		
		<div>{{$errors->first('size_id')}}</div>
	   
	</div>
	<div class="col-md-4 form-group"> 	
		<label for="plotno">Select Plot No<span class="text-danger">*</span></label>
		<select name="plotno" id="plotno" class="form-control">
		
		</select>
		
		<div>{{$errors->first('plotno')}}</div>
	   
	</div>
	
	 <div class="col-md-4 form-group">
	 
	    	<label for="cost">Cost.<span class="text-danger">*</span></label>
	    	<input type="number" name="cost" class="form-control" placeholder="Cost" value="{{old('cost')}}" >
	    	 <div>{{$errors->first('cost')}}</div>
	    
	 </div>
	 </div>
	<div class="row">
	   <div class="form-group col-md-4">
	   	<label for="paymentmode">Payment Mode<span class="text-danger">*</span></label>
	   	<select name="paymentmode_id" id="paymentmode_id" class="form-control">
	   		<option value="">--- Select Payment Mode ---</option>
                    @foreach ($paymentmodes as $paymentmode)
                    <option value="{{$paymentmode->id}}">{{ $paymentmode->name}}</option>
                    @endforeach
		</select>
	   	</select>
	   			<div>{{$errors->first('paymentmode')}}</div>

	   </div>

	   <div class="form-group col-md-4">
	   	<label for="amount">Amount Paid<span class="text-danger">*</span></label>
	   	<input type="number" name="amount" class="form-control" placeholder="Amount paid" value="{{old('amount')}}">
	   	<div>{{$errors->first('amount')}}</div>
	   </div>
       
       <div class="form-group col-md-4">
       	<label for="reference">Reference <span class="text-danger">*</span></label>
       	<input type="text" name="reference" class="form-control" placeholder="reference" value="{{old('reference')}}">
       	<div>{{$errors->first('reference')}}</div>
       </div>
	</div>
	<div class="row">
		<div class="form-group col-md-4">
			<label for="narration">Narration</label>
			<input type="text" name="narration" class="form-control" placeholder="Narration" value="{{old('narration')}}" >
		</div>
		<div class="form-group col-md-8">
			<label for="amountinwords">Amount in Words</label>
			<input type="text" name="amountinwords" class="form-control" placeholder="Amount in Words" value="{{old('amountinwords')}}" disabled="true">
		</div>
	</div>
 <div class="box-footer">
        <a href="/housetrx/create" class="btn btn-secondary">Cancel</a>
  	    <button type="submit" class="btn btn-primary " > Add </button>

       </div>
		</form>

	</div>
</div>

  <script type="text/javascript">
    $('#location').change(function(){
    var locationID = $(this).val();    
    if(locationID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sizes')}}?location_id="+locationID,
           success:function(res){               
            if(res){
                $("#size").empty();
                $("#size").append('<option>--Select Size--</option>');
                $.each(res,function(key,value){
                    $("#size").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#size").empty();
            }
           }
        });
    }else{
        $("#size").empty();
        $("#plotno").empty();
    }      
   });
    $('#size').on('change',function(){
    var sizeID = $(this).val();    
    if(sizeID){
        $.ajax({
           type:"GET",
           url:"{{url('get-plotno')}}?size_id="+sizeID,
           success:function(res){               
            if(res){
                $("#plotno").empty();
                $("#plotno").append('<option>--Select Plot No--</option>');
                $.each(res,function(key,value){
                    // // for(var i=0;i<key.length;i++){
                    // 	var pts = Object.keys(value).length;

                    // 	alert(pts);
                    // $("#plotno").append('<option value="'+key+'">'+value+'</option>');
                        var plots = value;
         for(var i = 0; i < plots.length; i++)
          {
           $('#plotno').append('<option value='+i+'>'+plots[i]+'</option>');
          }
                });

 
           
            }else{
               $("#plotno").empty();
            }
           }
        });
    }else{
        $("#plotno").empty();
    }
        
   });
</script>

@endsection