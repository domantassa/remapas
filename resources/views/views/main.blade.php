@extends('layouts.app')
@section('content')

<div class="contain">
    <h1 class="title bold">Sveiki atvykę į <span class="redT bold">Chip Tunning</span> failų servisą!</h1>
    <div class="textContainer">
        <p class= "text">
        Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.
        Visos programos yra patikrintos naudojant dyno stendą. Dirbame <span class="redT bold"> 24/7</span>. Registruokitės ir gaukite 20 kreditų <span class="redT bold"> nemokamai </span>!
        </p>
    </div>
    <div class="row rowCol">
    <div class="col-sm-2 card-round">
      <div class="rCircle">
        <img class="icon" src="{{asset('images/dyler.png')}}" style="top: 22px; left: 13px">
      </div>
      <p class= "cardText">
        Tapk dyleriu
      </p>
      <div class="cardButtonDiv">
        <button class="cardButton">
            PLAČIAU
        </button>
      </div>
    </div>
    <div class="col-sm-2 card-round">
    <div class="rCircle">
        <img class="icon" src="{{asset('images/irankis.png')}}" style="top: 14px; left: 13px">
      </div>
      <p class= "cardText">
        Įrankiai
      </p>
      <div class="cardButtonDiv">
        <button class="cardButton">
            PLAČIAU
        </button>
      </div>
    </div>
    <div class="col-sm-2 card-round">
    <div class="rCircle">
        <img class="icon" src="{{asset('images/pagalba.png')}}" style="top: 14px; left: 13px">
      </div>
      <p class= "cardText">
        TAPK DYLERIU
      </p>
      <div class="cardButtonDiv">
        <button class="cardButton">
            PLAČIAU
        </button>
      </div>
    </div>
  </div>
    
</div>


@endsection