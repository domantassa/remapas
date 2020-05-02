@extends('layouts.app')
@section('content')

<div class="contain">

    <a href="https://youtube.com"><div class="soc yt">
        <img class="socicon" src="{{asset('images/yt.png')}}" alt="yt.png" style=" width: 20px">
    </div></a>
    <a href="https://youtube.com"><div class="soc insta">
        <img class="socicon" src="{{asset('images/ig.png')}}" alt="ig.png" style="width: 25px">
    </div></a>
    <a href="https://facebook.com"><div class="soc fb">
        <img class="socicon " src="{{asset('images/fb.png')}}" alt="fb.png" style=" width: 15px; margin-left: 4px;">
    </div></a>

    <div  class="row showOnPhones fade-in">
        <div class="phonecontent">
            <h1 class="title bold phoneh1">@lang('Sveiki atvykę į') <span class="redT bold">Chip Tunning</span> @lang('failų servisą!')</h1>
            <p class="text phonetext">@lang('Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.')
            @lang('Visos programos yra patikrintos naudojant dyno stendą. Dirbame') <span class="redT bold"> 24/7</span>. @lang('Registruokitės ir gaukite 20 kreditų') <span class="redT bold"> @lang('nemokamai') </span>!</p>
            <button class="phonebtn">@lang('Mūsų darbai')</button>
            <div class="phonephoto">
                <img class="phonecar " data-src="{{asset('images/phonecar.png')}}" alt="phonecar.png" style="top: 22px; left: 13px">
            </div>
        </div>
        

    </div>

    <div class="showOnPhones ">
        
    <div class="gSection phonecard">
        <div class="rCircle">
                <img class="icon" src="{{asset('images/dyler.png')}}" alt="dyler.png" style="top: 22px; left: 13px">
            </div>
            <p class= "cardText">
            @lang('Tapk dyleriu')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone upper">
                @lang('Plačiau')
                </button>
            </div>
    </div>
    <div class="gSection phonecard">
        <div class="rCircle">
                <img class="icon " src="{{asset('images/irankis.png')}}" alt="irankis.png" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText">
            @lang('Įrankiai')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone upper">
                @lang('Plačiau')
                </button>
            </div>
    </div>
    
    <div class="gSection phonecard ">
        <div class="rCircle">
        <img class="icon " src="{{asset('images/pagalba.png')}}" alt="pagalba.png" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText">
            @lang('Pildyti paraišką')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton cardButtonPhone upper">
                @lang('Plačiau')
                </button>
            </div>
    </div>

    </div>

    <div  class="row hideOnPhones fade-in ">
        <div class="col-sm-6">
            <h1 class="title bold">@lang('Sveiki atvykę į') <span class="redT bold">Chip Tunning</span> @lang('failų servisą!')</h1>
            <div class="col-12 col-sm-9">
            <div class="textContainer">
                <p class= "text">
                @lang('Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.')
                @lang('Visos programos yra patikrintos naudojant dyno stendą. Dirbame') <span class="redT bold"> 24/7</span>. @lang('Registruokitės ir gaukite 20 kreditų') <span class="redT bold"> @lang('nemokamai') </span>!
                </p>
            </div>
            </div>
            <div class="row  rowCol">
            <div class="col-2 card-round">
            <div class="rCircle">
                <img class="icon" src="{{asset('images/dyler.png')}}" alt="dyler.png" style="top: 22px; left: 13px">
            </div>
            <p class= "cardText">
            @lang('Tapk dyleriu')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton upper">
                @lang('Plačiau')
                </button>
            </div>
            </div>
            <div class="col-2 card-round">
            <div class="rCircle">
                <img class="icon " src="{{asset('images/irankis.png')}}" alt="irankis.png" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText">
            @lang('Įrankiai')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton upper ">
                @lang('Plačiau')
                </button>
            </div>
            </div>
            <div class="col-2 card-round">
            <div class="rCircle">
                <img class="icon " src="{{asset('images/pagalba.png')}}" alt="pagalba.png" style="top: 14px; left: 13px">
            </div>
            <p class= "cardText upp">
            @lang('Pagalbos sistema')
            </p>
            <div class="cardButtonDiv">
                <button class="cardButton upper ">
                @lang('Plačiau')
                </button>
            </div>
            </div>
            <div class="row rowCol">
                <div class="col-3">
                    <button class="redButton">
                    @lang('Pildyti paraišką')
                    </button>
                </div>
                <div class="col-4">
                    <button class="redButton" style="margin-left: 15px">
                    @lang('Mūsų darbai')
                    </button>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-6" style="z-index: -1">
            <div class="rCircle bigRCircle">
                <img class="grow-in grow-in-appear car" data-src="{{asset('images/coolcar.png')}}" alt="car.png">
            </div>
        </div>
    </div>
  </div>
 
  
    <div  class="row mtem fade-in">
    <div class="col-md-6 rSection">
        <div class="rcontent m-5">

        <h1 class="bold">@lang('Jau turite paskyra?')</h1>
            <h1 class="bold"><span class="redT bold gSectionRText" style="color:white !important">@lang('Prisijungite prie savo failų sistemos')</span></h1>
            <ul>
        <li class="loginListItem">@lang('Siūlome aukščiausios kokybės individualiai kurtas ECU programas daugeliui automobilių.')</li>
        <li class="loginListItem">@lang('Visos programos yra patikrintos naudojant dyno stendą')</li>
        <li class="loginListItem">@lang('Naudokitės mūsų pagalbos sistema')</li>
        <li class="loginListItem">@lang('Išmėginkite mūsų naujus teikiamus įrankius')</li>
        <li class="loginListItem">@lang('Dirbame 24/7.')</li>
        </ul>
   

     
        <a href="https://files.remapas.lt/" class="btn btn-black" style="text-decoration:none">@lang('Prisijungti')</a>

    </div>
    </div>
   
  
    <div class="col-md-6 gSection">
        <div class="rcontent m-5">
            <h1 class="bold">@lang('Vis dar neturite paskyros?')</h1>
            <h1 class="bold"><span class="redT bold gSectionRText">@lang('Registruotas vartotojas gali:')</span></h1>
            <ul>
                <li class="registerListItem">@lang('Pirkti kreditus naudojant PayPal arba Paysera') </li>
                <li class="registerListItem">@lang('Įkelti ECU failus ir gauti modifikuotus atgal')</li>
                <li class="registerListItem">@lang('Modifikuoti failai yra aukščiausios kokybės, saugųs ir patikrinti naudojant dyno stendą')</li>
                <li class="registerListItem">@lang('Kiekvienas failas yra individualiai modifikuotas pagal Jūsų automobilį siekiant išgauti geriausius rezultatus')</li>
            </ul>
            <button class="btn btn-black">@lang('Registruotis nemokamai')</button>
        </div>
    </div>
    
  </div>
  <div  class="row">
        <div class="flex center mt-5">
            <h1 class="bold">
            @lang('Kodėl mes?')
            </h1>
        </div>
        <div class="kodelmes">
            <div class="circlePlace fade-in">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">1</p>
                </div>
            </div>
            <p class= "text kodelmesText fade-in">
            @lang('Mūsų pasiūloje rasite tik 100% Dyno ištestuotus, aukščiausios kokybės failus, kuriems suteikiame garantiją.Pagal individualius susitarimus failus teikiame beveik visą parą.')
            </p>
            <div class="circlePlace fade-in">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">2</p>
                </div>
            </div>
            <p class= "text kodelmesText fade-in">
            @lang('Esant reikalui atliksime būtent jūsų atveju reikalingas failo korekcijas.')
            </p>
            <div class="circlePlace fade-in">
                <div class="rCircle kodelmesCircle">
                    <p class="kodesmesNumber">3</p>
                </div>
            </div>
            <p class= "text kodelmesText fade-in">
            @lang('Bene vieninteliai pasaulyje siūlome tokią stiprią, visapusišką, lanksčiomis darbo valandomis veikiančią support sistemą, kuri padės spręsti visas įmanomas problemas - failų, įrangos naudojimo, mechaninių gedimų, mechaninio automobilių tobulinimo ir kt.')
            </p>
            <div class="circlePlace fade-in">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">4</p>
                </div>
            </div>
            <p class= "text kodelmesText fade-in">
            @lang('Suteikiame laisvę rinktis kaip glaudžiai norite bendradarbiauti su mumis.Savarankiškai dirbantiems su master įranga siūlome patogiomis valandomis veikiantį failų tiekimą ir live help /tickets sistemos pagalbą. Siekiantiems užtikrinto rezultato, nuolatinio tobulėjimo ir tiems, kuriems reikalinga patikima pagalba iš šalies siūlome stiprią support sistemą, įrangos įsigijimą ir daugybę kitų privalumų.')
            </p>
            <div class="circlePlace fade-in">
                <div class="rCircle kodelmesCircle">
                <p class="kodesmesNumber">5</p>
                </div>
            </div>
            <p class= "text kodelmesText fade-in">
            @lang('Visiems slave useriams teikiame pagalbą darbe su projektais. Stage 3/4/5 failai ir reikalingų modifikacijų sąrašas,konsultacijos jas atliekant. Visi projektiniai failai teikiami pagal automobilių gyvus parametrus (data log) ir dyno kreives.')
            </p>
            <div class="row">
                <div class="col-8 hideOnPhone"> 
                    <img class="grow-in KodelmesCar" data-src="{{asset('images/kodelmesCar.png')}}" alt="kodelmesCar.png">
                </div>
                <div class="col-3">
                    <div class="visdar">
                    <h1 class=" bold" style="float:right"><@lang('Vis dar') <span class="redT bold">@lang('Neįtikinome')</span>?</h1>
                    <p class= "text visdarText" style="float:right">
                    @lang('Esame atviri pasiūlymams. Susisiekite, pateikite savo sąlygas ir idėjas bendradarbiavimui.')
                    </p>
                    <button class="cardButton registerFreeBtn" style="float:right">@lang('Susisiekti')</button>
                    </div>
                    
                </div>
                <div class="showOnPhones">
                    <img class="grow-in kodelmesCarSmall" data-src="{{asset('images/kodelmesCarSmall.png')}}" alt="kodelmesCarSmall.png">
                </div>
            

            </div>
        </div>
    </div>





</div>
<div  class="mob-cont fade-in">
<div class="container mt-5 " style="margin:auto;max-width:1000px">
<div class="">
    <div class="row">

        <div class="col tab tab-begin" id="1"> 
            <div class="rCircle mb-2">
                <img class="icon" src="{{asset('images/info.png')}}" alt="info.png" style="top: 15px; ">
            </div>
             <div class="p-2 tabheader hideOnPhones" >@lang('Apie mus')</div>
    
        </div>
        <div class="col tab" id="2"> 
            <div class="rCircle mb-2">
                <img class="icon" src="{{asset('images/dyler.png')}}" alt="dyler.png"  style="top: 22px;">
            </div>
        <div  class="p-2 tabheader hideOnPhones" >@lang('Tapk dyleriu')</div>
        </div>
        <div class="col tab" id="3"> <div class="rCircle mb-2">                <img  class="icon" src="{{asset('images/pagalba.png')}}" alt="pagalba.png"  style="top: 14px;">    </div>
         <div  class="p-2 tabheader hideOnPhones" >@lang('Pagalbos sistema')</div>

    </div>
      
      
    </div>

    <div  class="row">
        
            <div class="tab-content failu-servisas" >
            <div class="overlay">
            <div id="content-1" class="content content-begin p-5"> 

                 
                     <div class="body">
                     @lang('Suteikiame galimybę tapti mūsų partneriu versle, įsigyti profesionalią įrangą darbui, gauti pagalbą, patarimus, konsultacijas bei reikalingas pamokas tam, kad jūsų teikiamos paslaugos taptų aukščiausios kokybės. Šią galimybę suteikiame kiekvienam chiptuneriui, tiek pradedančiajam, tiek pažengusiam profesionalui. Pasinaudokite galimybe savo verslą pakelti į aukščiausią lygmenį, gauti profesionaliausius patarimus, atsakymus į visus klausimus be užuolankų. Padėsime ir konsultuosime visose srityse, pradedant profesionalia diagnostika bei automobilio techninės būklės įvertinimo prieš/po chip tuning, baigiant subtilybėmis nuskaitinėjant bei įrašinėjant failus, reklama, įvaizdžiu bei komunikacija su klientais. Trumpai tariant – jūsų problemos versle taps mūsų problemomis. Būtinos sąlygos – įrangos komplekto įsigijimas iš mūsų rankų bei metinė support narystė mūsų bendruomenėje. Kiekvienas partneris turi galimybę kartu tapti ir partneriu-atstovu, tokiu būdų gauti dar geresnes failų kainas ir daug kitų papildomų privalumų.')<br><br>

                     @lang('Noriu tapti partneriu (landing page į anketą, kurią reikia užpildyti norint tapti slave user). Anketoje turi nurodyti vardą pavardę, trumpai apie savo žinias ir patirtį, kokios pagalbos daugiausiai reikės iš mūsų, su kokiais auto žada dirbti ar dirba daugiausiai, kokia turima ir trūkstama įranga, kontaktai kaip susisiekti su juo.')<br><br>

                     @lang('Suteikiame galimybę tapti partneriu-atstovu – prekiauti mūsų failais bei įranga, tačiau tai daryti savo vardu. Suteiksime website platformą darbui, kurią galėsite naudoti savo reikmėms arba failų prekybai. Apie visus oficialius partnerius-atstovus skelbsime visuose savo reklamos kanaluose, taip padėsime jums augti. Tokiu būdu būdamas partneriu turėsite unikalią galimybę papildomai užsidirbti, gauti dideles nuolaidas įsigyjant failus savo reikmėms. Atkreipiame dėmesį, kad norint tapti partneriu-atstovu būtina įsigyti slave įrangos paketą. Dėl galimybės tapti partneriu-atstovu kreipkitės tiesiogiai į mus, kiekvienu atveju individualiai aptariamos abiems pusėms palankios sąlygos bei galimybės.')<br><br>

                     @lang('Tiek partneriu-atstovu, tiek partneriu gali tapti kiekvienas servisas ir pradedantysis. Prisijunkite prie augančios mūsų bendruomenes ir padėkite savo versui augti kartu su mumis, tapkite tikru profesionalu! Mes padėsime jums kasdien tobulėti galios didinimo srityje!')


                     </div>
                </div>


                        
            <div id="content-2" class="content  p-5"> 

                 
                     <div class="body">
                     @lang('testas')
                     </div>
                </div>


                <div id="content-3" class="content p-5"> 

                 
                     <div class="body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </div>
                </div>
                </div>
            </div>
            </div>


        
    </div>
</div>
</div>
</div>

<!-- 
        Kontaktai
.
.
.
.
.
.
.


-->



<script>

 $( ".tab" ).click(function() {
    $("#content-"+$(".tab-begin").attr('id')).removeClass("content-begin");
    $(".tab-begin").removeClass("tab-begin");
        $("#content-"+$( ".tab-active" ).attr('id')).removeClass("content-active");
        $(".tab-active").removeClass("tab-active");
     $( this).addClass( "tab-active" );
  $( this).addClass( "tab-active" );
    $("#content-"+$( ".tab-active" ).attr('id')).addClass( "content-active" );
    



});

</script>


<script>



</script>

@endsection

</script>