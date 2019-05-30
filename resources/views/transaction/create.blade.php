@extends('layouts.layout')
@section('title','Record Transaction')
 <script src="http://www.codermen.com/js/jquery.js"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header">Record Transaction</div>

            <div class="col-12">
            <form action="/transaction" method="POST">
                        @csrf
                <div class="row">
                  <div class="col-md-4 form-group">
                    
                     <label for="idno">ID No.<span class="text-danger">*</span></label>
                        <input type="text" name="idno" id="idno" class="form-control" placeholder="ID number" value="{{old('idno')}}" >
                         <div>{{$errors->first('idno')}}</div>
                   
                 </div>

                <div class="col-md-4 form-group">   
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input  type="text" name="name" id="name" class="form-control" placeholder="name" value="{{old('name')}}">
                    <div>{{$errors->first('name')}}</div>
                  
                </div>

              <div class="col-md-4 form-group">   
                    <label for="paymentType">Being Payment for<span class="text-danger">*</span></label>
                    <select name="paymentType" id="paymentType" class="form-control">
                        <option value="">--- Select Payment Type ---</option>
                                @foreach ($paymentTypes as $paymentType)
                                <option value="{{$paymentType->id}}">{{ $paymentType->name}}</option>
                                @endforeach  
                    </select>
                    
                    <div>{{$errors->first('paymentType')}}</div>
                   
                </div> 

                </div>
                <div class="row">
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

                <div class="col-md-4 form-group">   
                <label for="size">Size<span class="text-danger">*</span></label>
                  <select name="size" id="size" class="form-control">
                        <option value="">Select Size</option>
                       @foreach ($sizes as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                    </select>
                    
                    <div>{{$errors->first('size')}}</div>
                   
                </div>
                <div class="col-md-4 form-group">   
                    <label for="plotno">Select Plot No<span class="text-danger">*</span></label>
                    <select name="plotno" id="plotno" class="form-control">
                    
                    </select>
                    
                    <div>{{$errors->first('plotno')}}</div>
                   
                </div>
                
                 </div>

                <div class="row">       
                <div class="col-md-4 form-group">   
                    <label for="cost">Cost<span class="text-danger">*</span></label>
                    <input  type="text" name="cost" id="cost" class="form-control" placeholder="Cost" value="{{old('cost')}}" readonly >
                    <div>{{$errors->first('cost')}}</div>
                  
                </div>

                   <div class="form-group col-md-4">
                    <label for="paymentmode">Payment Mode<span class="text-danger">*</span></label>
                    <select name="paymentmode" id="paymentmode" class="form-control">
                        <option value="">--- Select Payment Mode ---</option>
                                @foreach ($paymentmodes as $paymentmode)
                                <option value="{{$paymentmode->id}}">{{ $paymentmode->name}}</option>
                                @endforeach
                    </select>
                            <div>{{$errors->first('paymentmode')}}</div>

                   </div>

                   <div class="form-group col-md-4">
                    <label for="date">Transaction Date<span class="text-danger">*</span></label>
                    <input type="date" name="date" class="form-control" placeholder="Transaction Date" value="{{old('date')}}">
                    <div>{{$errors->first('date')}}</div>
                   </div>
                   
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                    <label for="amount">Amount Paid<span class="text-danger">*</span></label>
                    <input type="number" name="amount" class="form-control" placeholder="Amount paid" value="{{old('amount')}}">
                    <div>{{$errors->first('amount')}}</div>
                   </div>

                   <div class="form-group col-md-4">
                    <label for="reference">Reference<span class="text-danger">*</span></label>
                    <input type="text" name="reference" class="form-control" placeholder="reference" value="{{old('reference')}}">
                    <div>{{$errors->first('reference')}}</div>
                   </div>

                    <div class="form-group col-md-4">
                        <label for="narration">Narration<span class="text-danger">*</span></label>
                        <input type="text" name="narration" class="form-control" placeholder="Narration" value="{{old('narration')}}" >
                    </div>

                </div>
             <div class="box-footer">
                    <cancle-button text="Cancel"  type="reset" ></cancle-button>
                    <my-button type="submit" text="Add"></my-button>
                    <button type="submit" class="btn btn-primary">Add</button>
                   </div>
                    </form>

               </div>

            </div>
        </div>
    </div>
</div>


  <script type="text/javascript">

    $('#size').on('change',function(){
    var sizeID = $(this).val();  
    var locationID = $('#location').val();    
    if(sizeID){
        $.ajax({
           type:"GET",
           url:"{{url('get-plotno')}}",
           data: {"size_id": sizeID,"location_id": locationID},
           success:function(res){               
            if(res){
                $("#plotno").empty();
                $("#plotno").append('<option>--Select Plot No--</option>');

                $.each(res,function(key,value){
                    	          
		      $('#plotno').append('<option value="'+key+'">'+value+'</option>');	                          
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

  $('#plotno').on('change',function(){
    var plotnoID = $(this).val(); 
    var plotno  =$( "#plotno option:selected" ).text(); 
    var sizeID = $('#size').val(); 
    var locationID = $('#location').val(); 
    if( plotnoID){
        alert(plotno);
        $.ajax({
           type:"GET",
           url:"{{url('get-cost')}}",
           dataType:"json",
           data: {"plotno": plotno,"size_id": sizeID,"location_id": locationID},

           success:function(data){ 
            
                $("#cost").val(data);       
                   
                   }
              });
        }else{
            $("#cost").empty();
        }
        
   });
  //search client name
   $(document).ready(function(){

    $('#name').on('click', function(){

        var search_idno = $('#idno').val();
        //alert(search_idno);

        $.ajax({
            type:"GET",
            url: "{{url('get-client-name')}}",
            dataType:"json",
            data: {"idno":search_idno},
            success: function(data) {
                 //alert(data);
                 if ($.trim(data)) {
                    $("#name").val(data).attr('readonly','true');
                    //$('#name').attr('readonly','true');
                 }
                 else{
                    alert("IDNO " +search_idno+ " does No exist.Register the client");
                    window.location.href = "{{route('clients.create')}}"; 
                   
                    
                 }
               
             }
        });
    });
});

   

</script>

@endsection