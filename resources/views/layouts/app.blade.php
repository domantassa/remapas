<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <title>Remapas</title>
  <meta name="description" content="Remapas site">
  <meta name="author" content="Domantas Sabaliauskas">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
        <div class="">
          <?php 

          ?>
            @include('layouts.navbar')
            @yield('content')
        </div>
  <script src="js/app.js"></script>
</body>
</html>

<div class="lang">
  <button class=" btn select">@lang('kalba')</button> 

<a class="option btn" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</button>


</div>

<script>


$(".select").click(function(){
//alert($('.option').css("display"));
if($('.option').css("display") == "none")
{
  $('.option').css("display","block");
}
else{
  $('.option').css("display","none");
}

});
  </script>