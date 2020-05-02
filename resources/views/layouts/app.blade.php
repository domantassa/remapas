<!doctype html>

<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

{!! SEO::generate() !!}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remapas</title>
  <meta name="description" content="Remapas site">
  <meta name="author" content="Domantas Sabaliauskas">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="js/app.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://www.remapas.eu/images/icon2.png">
  @yield('meta')
</head>


<body>
        <div class="" style="overflow-x:hidden">
        <div class="lang">
        <button class=" btn select py-2" type="button">@lang('kalba')</button> 

<a class="option btn a-c" style="width:100%" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</a>


</div>

            @include('layouts.navbar')
            @yield('content')
        </div>

</body>

</html>

<div class="lang">
  <button class="btnhvr btn select py-2 a-c" type="button" style="width:100%;height:100%">@lang('kalba')</button> 
  <a class="option btn btnhvr a-c" style="width:100%" href="{{route(Route::currentRouteName(),__('kalba2'))}}" >{{__('kalba2')}}</button>
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