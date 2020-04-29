@extends('layouts.app')


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

@section('content')




<div class="container mt-5" style="margin:auto;max-width:1000px">
    <div class="row"><h4>@lang('Kainos')</h4></div>
    <div class="row">
        <div class="col tab tab-begin" id="1"> <div class="rCircle-d "><img class="  my-2"  src="{{asset('images/BakasE25.png')}}" style="height:30px"> </div>
        <div class="p-1" >@lang('Galios didinimo kainos benzininiams varikliams')</div>
    
        </div>
        <div class="col tab" id="2"> <div class="rCircle-d "><img class="  my-2"  src="{{asset('images/BakasE85.png')}}"  style="height:30px"></div>
    
        <div  class="p-1" >@lang('Galios didinimo kainos dyzeliniams varikliams')</div>
        </div>
        <div class="col tab" id="3"> <div class="rCircle-d "><img class="  my-2"  src="{{asset('images/Forma.png')}}" style="height:30px">    </div>
         <div  class="p-1" >@lang('Kitos darbų') <br>@lang('Kainos')</div>
        </div>
            <div class="col tab" id="4"> <div class="rCircle-d "><img class="  "   src="{{asset('images/Traktorius.png')}}" style="width:33px;margin:0.7rem 0"></div>
        <div  class="p-1" >@lang('Paslaugų kainos sunkiajai ir agro technikai')</div>
        </div>
    </div>

    <div class="row">
        
            <div class="tab-content">
                <div id="content-1" class="content content-begin">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </div>
                <div id="content-2" class="content ">adng Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                </div>
                <div id="content-3" class="content ">
                Lorem Ipsum is simasdmmy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.   
                </div>
                <div id="content-4" class="content ">
                Lorem Ipsum iasd dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>  
                <div style="text-align:center"><a href="" style="" class=" btn btnn btn-grey">Susisiekti</a></div>
            </div>

        
    </div>

</div>

<script>

 $( ".tab" ).click(function() {

        
    $("#content-"+$(".tab-begin").attr('id')).removeClass("content-begin");
    $(".tab-begin").removeClass("tab-begin");
   

        $("#content-"+$( ".tab-active" ).attr('id')).removeClass("content-active");
        $(".tab-active").removeClass("tab-active");
    
        

     
    
     $( this).addClass( "tab-active" );
  $( this).addClass( "tab-active" );
    // alert(this);
    $("#content-"+$( ".tab-active" ).attr('id')).addClass( "content-active" );
    



});
</script>
@stop



