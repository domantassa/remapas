<!doctype html>

<html lang="en">
<head>
  
{!! SEO::generate() !!}
  <meta charset="utf-8">

  <title>Remapas</title>
  <meta name="description" content="Remapas site">
  <meta name="author" content="Domantas Sabaliauskas">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="js/app.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('meta')
</head>


<body>
        <div class="">
        <div class="lang">
        <button class=" btn select">@lang('kalba')</button> 

<a class="option btn" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</a>


</div>
          <?php 

          ?>
            @include('layouts.navbar')
            @yield('content')
        </div>

</body>

</html>

<div class="lang">
  <button class="btnhvr btn select">@lang('kalba')</button> 
  <a class="option btn btnhvr" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</button>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>

	

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({ wrapping: false });
            });

const images = document.querySelectorAll('[data-src]');


function preloadImage(img) {
    const src = img.getAttribute("data-src");
    if(!src) {
        return;
    }
    img.src = src;
}

const imgOptions = {
    threshold: 1,
    rootMargin: "0px 0px 400px 0px"
};

const imgObserver = new IntersectionObserver((entries, imgObserver) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
			entry.target.classList.add('grow-in-appear');
            preloadImage(entry.target);
            imgObserver.unobserve(entry.target);
        }
    })
}, imgOptions);

images.forEach(image => {
    imgObserver.observe(image);
})

$(function() {
	$c=document.location;
	$c='nav a[href="'+$c+'"]';
  $($c).addClass('active');
});


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