

<!doctype html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remapas</title>
    <meta name="description" content="Remapas site">
    <meta name="author" content="Domantas Sabaliauskas">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="js/app.js"></script>
   <style>
       .notfound{
    font-family: 'Montserrat', sans-serif;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 252px;
    font-weight: 900;
    margin: 0px;
    color: #262626;
    text-transform: uppercase;
    letter-spacing: -40px;
    margin-left: -20px;}
       </style>
  </head>

  <body>
  <div class="">


            

<nav class="navbar navbar-expand-lg navbar-dark" style="">
  <a class="navbar-brand" href="{{URL::to('/')}}"><img class="logo" src="{{asset('images/logotipas.png')}}" alt="logo.png" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dyler',App::getLocale())}}">@lang('Mūsų darbai') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('home',App::getLocale())}}">@lang('Namai')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('home',App::getLocale())}}">@lang('Failų servisas')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dyler',App::getLocale() )}}">@lang('Tapti dyleriu')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tools',App::getLocale())}}">@lang('Įrankiai')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dyler',App::getLocale())}}">@lang('Remapas support')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('kainos',App::getLocale())}}">@lang('Kainos')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('duk',App::getLocale())}}">@lang('D.U.K')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dyler',App::getLocale())}}">@lang('Kontaktai')</a>
      </li>
    </ul>
  </div>
</nav>


            <div class="container">
            
                <span class="redT bold notfound">404</span>

                
            </div>
            </div>        
        </div>
</body>


</html>



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