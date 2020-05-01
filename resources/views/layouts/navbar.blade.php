

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="{{URL::to('/')}}"><img class="logo" src="{{asset('images/logotipas.png')}}"></a>
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