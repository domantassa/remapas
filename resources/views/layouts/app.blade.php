<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Remapas</title>
  <meta name="description" content="Remapas site">
  <meta name="author" content="Domantas Sabaliauskas">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="js/app.js"></script>
</head>

<body>
        <div class="">
          <?php 

          ?>
            @include('layouts.navbar')
            @yield('content')
        </div>

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

function isElementInViewport(elem) {
    var $elem = $(elem);

    // Get the scroll position of the page.
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

// Check if it's time to start the animation.
function checkAnimation() {
    var $elem = $('.bar .level');

    // If the animation has already been started
    if ($elem.hasClass('start')) return;

    if (isElementInViewport($elem)) {
        // Start the animation
        $elem.addClass('start');
    }
}

// Capture scroll events
$(window).scroll(function(){
    checkAnimation();
});

  </script>