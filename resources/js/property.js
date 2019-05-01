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
                    $("#plotno").append('<option value="'+key+'">'+value+'</option>');
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