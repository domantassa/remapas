<!doctype html>

<html lang="en">
<head>
  
{!! SEO::generate() !!}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            @include('layouts.navbar')
            @yield('content')
        </div>

</body>

</html>

<div class="lang">
  <button class="btnhvr btn select">@lang('kalba')</button> 
  <a class="option btn btnhvr" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</button>
</div>



<script>
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

//ObserverForImages-----------------------------------------------------------

const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    threshold:0,
    rootMargin: "0px 0px -100px 0px"
}

const appearOnScroll = new IntersectionObserver
(function(
    entries,
    appearOnScroll
    ) {
    entries.forEach(entry => {
        if(!entry.isIntersecting) {
            return;
        } else {
            console.log("fire");
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        }
    });
}, 
appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

//ObserverItems-----------------------------------------------------------

$(function() {
	$c=document.location;
	$c='nav a[href="'+$c+'"]';
  $($c).addClass('active');
});

//Navbar-----------------------------------------------------------


$(".select").click(function(){
if($('.option').css("display") == "none")
{
  $('.option').css("display","block");
}
else{
  $('.option').css("display","none");
}

});



  </script>