@extends('layouts.app')
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
                    <input  type="text" name="name" id="name" class="form-control"  value="{{old('name')}}" readonly onclick="getName()">
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
                  <select name="size" id="size" class="form-control" onchange="getClientPlots()">
                        <option value="">Select Size</option>
                       @foreach ($sizes as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                    </select>
                    
                    <div>{{$errors->first('size')}}</div>
                   
                </div>
                
                 <div class="col-md-2 form-group" >   
                    <label for="plotno">Select Plot No</label>
                    <select name="plotno" id="plotno" class="form-control" onchange="additionalplot()">
                    
                    </select>
                    
                    <div>{{$errors->first('plotno')}}</div>
                   
                </div>
                
                <div class="new_plot" id="new">
                  <label for="new_plot">Allocate new Plot No</label>
                    <select name="new_plot" id="new_plot" class="form-control" onchange="getNewPlotCost()" >
                      
                    </select>
                </div>
                {{-- hidden client id div --}}
                <div style="display: none;">
                  <input type="text" name="client_id" id="client_id">
                </div>
                
                 </div>

                <div class="row">       
                <div class="col-md-4 form-group">   
                    <label for="cost">Cost</label>
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
                   </div>
                    </form>

               </div>

            </div>
        </div>
    </div>
</div>


  <script type="text/javascript">


  //search client name
    function getName(){

       var search_idno = $('#idno').val();
       if (search_idno.length == 0) {
        alert("Enter IDNO to search client")
           }
       else{
        $.ajax({
            type:"GET",
            url: "{{url('get-client-name')}}",
            dataType:"json",
            data: {"idno":search_idno},
            success: function(data) {                                
                 if ($.trim(data)) {
                   $.each(data,function(key,value){

                      $("#name").val(value);  
                      $("#client_id").val(key); 
                    });                

                      }
                 else{
                    alert("IDNO " +search_idno+ " does No exist.Register the client");
                    window.location.href = "{{route('clients.create')}}";
                }               
             }
        });
    }
    }


    //get client plots
    function getClientPlots()
    {  
    var clientID = $("#client_id").val(); 
    //alert(clientID);  
    var clientName = $("#name").val();      
    var sizeID = $("#size").val(); 
    var locationID = $('#location').val(); 

     if (clientName.length == 0) {
        alert("Enter IDNO to search client name")
           } 
   else if(sizeID){
        $.ajax({
           type:"GET",
           url:"{{url('get-client-plots')}}",
           data: {"client_id": clientID,"size_id": sizeID,"location_id": locationID},
           success:function(res){               
            if($.trim(res)){

                $("#plotno").empty();
                $("#plotno").append('<option>--Select--</option>');

                $.each(res,function(key,value){
                                  
              $('#plotno').append('<option value="'+key+'">'+value+'</option>');                              
                });
             $('#plotno').append('<option value="new">new</option>');
 
           
            }else{
                getPlots();
               
            }
           }
        });
    }else{
        $("#plotno").empty();
    } 
    } //end of get client plots

    //get plot nos
    function getPlots()
    {        
    var sizeID = $("#size").val(); 
    var locationID = $('#location').val();  

    if(sizeID){
        $.ajax({
           type:"GET",
           url:"{{url('get-plotno')}}",
           data: {"size_id": sizeID,"location_id": locationID},
           success:function(res){               
            if($.trim(res)){
                $("#plotno").empty();
                $("#plotno").append('<option>--Select Plot No--</option>');
                $("#new_plot").append('<option>--Select Plot No--</option>');
                $.each(res,function(key,value){
                                  
              $('#plotno').append('<option value="'+key+'">'+value+'</option>');                              
                });
  
            }else{
                $("#plotno").append('<option value="">--No Plot Available for this size--</option>');
               // $("#plotno").empty();
            }
           }
        });
    }else{
        $("#plotno").empty();
    } 
    } //end of get plots

 //buy new plot
    function getAvailablePlots()
    {        
    var sizeID = $("#size").val(); 
    var locationID = $('#location').val();  

    if(sizeID){
        $.ajax({
           type:"GET",
           url:"{{url('get-plotno')}}",
           data: {"size_id": sizeID,"location_id": locationID},
           success:function(res){               
            if($.trim(res)){
                $("#new_plot").empty();
                $("#new_plot").append('<option>--Select Plot No--</option>');

                $.each(res,function(key,value){
                                  
              $('#new_plot').append('<option value="'+value+'">'+value+'</option>');                              
                });
  
            }else{
                $("#new_plot").append('<option value="">--No Plot Available for this size--</option>');
               // $("#plotno").empty();
            }
           }
        });
    }else{
        $("#new_plot").empty();
    } 
    }

 //get plot cost
   function getPlotCost()
   {
    var plotno  =$( "#plotno option:selected" ).text(); 
    var sizeID = $('#size').val(); 
    var locationID = $('#location').val(); 
    if( plotno){
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
   }
   //get plot cost
   function getNewPlotCost()
   {
    var plotno  =$( "#new_plot option:selected" ).text(); 
    $("#plotno").empty();
    $('#plotno').append('<option value="'+plotno+'">'+plotno+'</option>').prop('selected', true);
     getPlotCost();
    
       }


 function additionalplot(){

   var val = $("#plotno").val();
  if (val == 'new') {
      $(".new_plot").hide().find('input:text').val(''); // hide and empty

      if (val) $("#" + val).show();
      getAvailablePlots();
  }
  else{
    getPlotCost();
  }
 }

//   $("#plotno").on("change", function() {
 

// });

</script>
@endsection