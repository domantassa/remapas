
@extends('layouts.app')
@section('content')
<div class="phead">
    <div class="container" >
<h1 class=" mt-2" style="font-weight:bold;"> {{$object->title}}</h1>
    </div>
</div>
<div class="container project-single fade-in" >

    <div class="row " >
           
    <div class="col-md-12">
            <img class='lightbox' src="{{asset($object->image)}}" style="">
        </div>
        

        <div class="col-md-12 mt-2" >
            
                <p>
                {!!$object->modifications!!}
                </p>
            
            

            
            
        </div>


    </div>
    
    <div class="col-md-12 mt-2">
        <div class="row details">
            <div class="col-md de">Power:</div>

            <div class="col-sm dat">Before: {{$object->power_before}}</div>

            <div class="col-sm dat">After: {{$object->power_after}}</div>
        </div>
    </div>
</div>

<div class="lightboxx" style="display:none">
    <div class="overlay d-flex align-items-center">
    <div class="row">
    <div class="photo "><img id="photobox" src="">
    <div class="exitimg"><div class="" id="close">×</div></div>
    </div>
    </div>
    
    </div>
    

</div> 

<script>

$(".lightbox").click(function(){

$("#photobox").attr('src',$(".lightbox").attr('src'));
$(".lightboxx").toggle();

});
$("#close").click(function(){

$(".lightboxx").toggle();

});
</script>
@stop

