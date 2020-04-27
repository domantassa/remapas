@extends('layouts.app')
@section('content')

<div class="contain">
    <div class="row showOnPhones">
        <div class="phonecontent">
            <h1 class="title bold phoneh1">Sveiki atvykę į <span class="redT bold">Chip Tunning</span> failų servisą!</h1>
            <p class="text phonetext">Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.
                Visos programos yra patikrintos naudojant dyno stendą. Dirbame <span class="redT bold"> 24/7</span>. Registruokitės ir gaukite 20 kreditų <span class="redT bold"> nemokamai </span>!</p>
            <button class="phonebtn">Mūsų darbai</button>
            <div class="phonephoto">
                <img class="phonecar" src="{{asset('images/phonecar.png')}}" style="top: 22px; left: 13px">
            </div>
        </div>
        

    </div>

    <div class="showOnPhones">
        
    <div class="gSection phonecard">
        <div class="rCircle">
                <img class="icon" src="{{asset('images/dyler.png')}}" style="top: 22px; left: 13px">
            </div>
            <p class= "cardText">
                Tapk dyleriu
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone">
                    PLAČIAU
                </button>
            </div>
    </div>
    <div class="gSection phonecard">
        <div class="rCircle">
                <img class="icon" src="{{asset('images/irankis.png')}}" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText">
            Įrankiai
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone">
                    PLAČIAU
                </button>
            </div>
    </div>
    
    <div class="gSection phonecard">
        <div class="rCircle">
        <img class="icon" src="{{asset('images/pagalba.png')}}" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText">
                Pildyti paraišką
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone">
                    PLAČIAU
                </button>
            </div>
    </div>

    </div>

    <div class="row hideOnPhones">
        <div class="col-sm-6">
            <h1 class="title bold">Sveiki atvykę į <span class="redT bold">Chip Tunning</span> failų servisą!</h1>
            <div class="col-12 col-sm-9">
            <div class="textContainer">
                <p class= "text">
                Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.
                Visos programos yra patikrintos naudojant dyno stendą. Dirbame <span class="redT bold"> 24/7</span>. Registruokitės ir gaukite 20 kreditų <span class="redT bold"> nemokamai </span>!
                </p>
            </div>
            </div>
            <div class="row rowCol">
            <div class="col-2 card-round">
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
            <div class="col-2 card-round">
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
            <div class="col-2 card-round">
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
            <div class="row rowCol">
                <div class="col-3">
                    <button class="redButton">
                        Pildyti paraišką
                    </button>
                </div>
                <div class="col-4">
                    <button class="redButton" style="margin-left: 15px">
                        Mūsų darbai
                    </button>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-6" style="z-index: -1">
            <div class="rCircle bigRCircle">
                <img class="car" src="{{asset('images/car.png')}}">
            </div>
        </div>
    </div>
  </div>
 
  
    <div class="row">
    <div class="col-md-6 rSection">
        <div class="rcontent m-5">

        <h1 class="bold">Jau turite paskyra?</h1>
            <h1 class="bold"><span class="redT bold gSectionRText" style="color:white !important">Prisijungite prie savo failų sistemos</span></h1>
            <ul>
        <li class="loginListItem">Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.</li>

<li class="loginListItem">Visos programos yra patikrintos naudojant dyno stendą.</li><li class="loginListItem"> Dirbame 24/7.</li>
</ul>
   

     
        <a href="https://files.remapas.lt/" class="btn btn-black" style="text-decoration:none">Prisijungti</a>

    </div>
    </div>
   
  
    <div class="col-md-6 gSection">
        <div class="rcontent m-5">
            <h1 class="bold">Vis dar neturite paskyros?</h1>
            <h1 class="bold"><span class="redT bold gSectionRText">Registruotas vartotojas gali:</span></h1>
            <ul>
                <li class="registerListItem">Pirkti kreditus naudojant PayPal arba Paysera </li>
                <li class="registerListItem">Įkelti ECU failus ir gauti modifikuotus atgal</li>
                <li class="registerListItem">Modifikuoti failai yra aukščiausios kokybės, saugųs ir patikrinti naudojant dyno stendą</li>
                <li class="registerListItem">Kiekvienas failas yra individualiai modifikuotas pagal Jūsų automobilį siekiant išgauti geriausius rezultatus</li>
            </ul>
            <button class="btn btn-black">Registruotis nemokamai</button>
        </div>
    </div>
    
  </div>
  <div class="row">
        <div class="flex center mt-5">
            <h1 class="bold">
                Kodėl mes?
            </h1>
        </div>
        <div class="kodelmes">
            <div class="circlePlace">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">1</p>
                </div>
            </div>
            <p class= "text kodelmesText">
            Mūsų pasiūloje rasite tik 100% Dyno ištestuotus, aukščiausios kokybės failus, kuriems suteikiame garantiją.Pagal individualius susitarimus failus teikiame beveik visą parą.
            </p>
            <div class="circlePlace">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">2</p>
                </div>
            </div>
            <p class= "text kodelmesText">
            Esant reikalui atliksime būtent jūsų atveju reikalingas failo korekcijas. 
            </p>
            <div class="circlePlace">
                <div class="rCircle kodelmesCircle">
                    <p class="kodesmesNumber">3</p>
                </div>
            </div>
            <p class= "text kodelmesText">
            Bene vieninteliai pasaulyje siūlome tokią stiprią, visapusišką, lanksčiomis darbo valandomis veikiančią support sistemą, kuri padės spręsti visas įmanomas problemas - failų, įrangos naudojimo, mechaninių gedimų, mechaninio automobilių tobulinimo ir kt.
            </p>
            <div class="circlePlace">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">4</p>
                </div>
            </div>
            <p class= "text kodelmesText">
            Suteikiame laisvę rinktis kaip glaudžiai norite bendradarbiauti su mumis.Savarankiškai dirbantiems su master įranga siūlome patogiomis valandomis veikiantį failų tiekimą ir live help /tickets sistemos pagalbą. Siekiantiems užtikrinto rezultato, nuolatinio tobulėjimo ir tiems, kuriems reikalinga patikima pagalba iš šalies siūlome stiprią support sistemą, įrangos įsigijimą ir daugybę kitų privalumų.
            </p>
            <div class="circlePlace">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">5</p>
                </div>
            </div>
            <p class= "text kodelmesText">
            Visiems slave useriams teikiame pagalbą darbe su projektais. Stage 3/4/5 failai ir reikalingų modifikacijų sąrašas,konsultacijos jas atliekant. Visi projektiniai failai teikiami pagal automobilių gyvus parametrus (data log) ir dyno kreives.
            </p>
            <div class="row">
                <div class="col-8 hideOnPhone"> 
                    <img class="KodelmesCar" src="{{asset('images/kodelmesCar.png')}}">
                </div>
                <div class="col-3">
                    <div class="visdar">
                    <h1 class=" bold" style="float:right">Vis dar <span class="redT bold">Neįtikinome</span>?</h1>
                    <p class= "text visdarText" style="float:right">
                    Esame atviri pasiūlymams. Susisiekite, pateikite savo sąlygas ir idėjas bendradarbiavimui.
                    </p>
                    <button class="cardButton registerFreeBtn" style="float:right">Susisiekti</button>
                    </div>
                    
                </div>
                <div class="showOnPhones">
                    <img class="kodelmesCarSmall" src="{{asset('images/kodelmesCarSmall.png')}}">
                </div>
            

            </div>
        </div>
    </div>





</div>


@endsection