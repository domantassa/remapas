

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="{{URL::to('/')}}"><img class="logo" src="{{asset('images/logotipas.png')}}" alt="logo.png" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mt-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}/">@lang('Namai')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('musu.darbai')}}">@lang('Mūsų darbai') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://files.remapas.lt/">@lang('Failų servisas')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dyler' )}}">@lang('Tapti dyleriu')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tools')}}">@lang('Įrankiai')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://files.remapas.lt/">@lang('Remapas support')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('kainos')}}">@lang('Kainos')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('duk')}}">@lang('D.U.K')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('kontaktai')}}">@lang('Kontaktai')</a>
      </li>
    </ul>
  </div>
</nav>