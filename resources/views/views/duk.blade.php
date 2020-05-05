
@extends('layouts.app')

@section('content')





<div class="container m-auto" >
    
    <div class="row " style="padding-top:5rem;padding-bottom:5rem;height:674px;">
        
        <div class="col-8 align-self-center">
            <h2 class=" " style="font-weight:bold" >@lang('Dažniausiai užduodami klausimai')</h2>
            
            <h3 class="red"> @lang('Jei dar turite klausimų, susisiekite!')</h3>
            <a href="{{route('kontaktai',App::getLocale() )}}" class="btn btnn btn-grey-light"> @lang('Susisiekite') </a>
        </div>
    <div class="col-4 carr">
    <img class="car" src="{{asset('images/lambo.png')}}" alt="lambo.png">

        </div>
</div>

    </div>

















    <!-- Klausimai-->
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('1. Ar galios didinimas nepakenks automobilio varikliui, sankabai, dėžei ir kt.?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                @lang('Profesionaliai atliktas galios didinimas neigiamos įtakos automobilio mechaniniams mazgams neturės. Ypatingai svarbu prieš atliekant galios didinimo programavimo darbus gerai įvertinti automobilio galimybes bei techninę būklę , jei yra gedimų, pirma išspręsti jų tvarkymo klausimus ir tik tuomet didinti galią. Remapo servise naudojama pažangi, originali įranga, o kiekvienas automobilis programuojamas individualiai. Tai leidžia maksimaliai išpildyti kliento lūkesčius ir tuo pačiu apsaugoti automobilį nuo per greito agregatų susidėvėjimo.')

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('2. Ar atlikus galios didinimą padidėja išmetamųjų dujų kiekis?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                @lang('Ne, profesionaliai atlikus galios didinimą išmetamųjų dujų kiekis nepadidės ir normų neviršins. Dūmingumas po galios didinimo padidėja tik tuo atveju, jeigu automobilis turi techninių gedimų arba galios didinimas buvo atliktas mėgėjiškai ir neprofesionaliai.')
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('3. Ar atliktas galios didinimas ar kiti programavimo darbai netrukdys sėkmingai praeiti techninės apžiūros?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                @lang('Ne, galios didinimas nesukelia jokių neigiamų padarinių, kurie trukdytų praeiti techninę apžiūrą.')
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('4. Kuo skiriasi Stage 1, Stage 2 ir Stage 3 galios didinimas?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                @lang('Iš esmės tai gana laisvai interpretuojamos sąvokos, dėl kurių egzistuoja įvairių nuomonių. Paprastai tariant, jos apibūdina, kiek stipriai yra modifikuojamas automobilis galios prieaugiui pasiekti. Visur sutariama, kad Stage 1 yra galios didinimas tik programuojant automobilio variklio valdymo bloką. Stage 2 gali būti stipresnis galios didinimas tik programuojant, arba kartu atliekant pagrindinių mazgu mechanines modifikacijas. Stage 3 – esminis automobilio mechaninių mazgų perdarymas siekiant maksimalių galios prieaugio rezultatų.')
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('5. Kuo skiriasi chip tuning ir remapas?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                @lang('Iš esmės niekuo, tai dvi sąvokos reiškiančios tą patį – galios didinimą programuojant automobilio variklio valdymo bloką.')

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('6. Nuo ko priklauso galios didinimo kaina?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                @lang('Pirmiausia, nuo suteikiamų paslaugų kokybės, naudojamos įrangos, turimų žinių bei sukauptos patirties. Toliau – nuo automobilio modelio, variklio, norimų rezultatų ir kt.')

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('7. Ar atliekant galios didinimą privalu eliminuoti ekologines sistemas?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                @lang('Tikrai ne, jei jose nėra gedimų. Tačiau kai kuriems modeliams, norint pasiekti Stage 2 rezultatus reikalinga eliminuoti DPF.')

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">@lang('8. Kas yra Power Box įrenginys ir kaip jis veikia?')</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                @lang('Apie Power Box platesnė informacija pateikiama skiltyje „Paslaugos“. Atkreipiame dėmesį, kad Remapo Power Box yra naujos kartos, aukščiausios kokybės ir ypatingai rekomenduojami gamintojo garantiją turintiems automobiliams.Neradai atsakymo į rūpimus klausimus? Susisiek su mumis: info@remapas.lt')

                </p>
                
            </div>
        </div>
    </div>



</div>



@stop