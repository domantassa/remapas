
@extends('layouts.app')

@section('content')
<div class="container m-auto" >
    <div class="row " style="padding-top:5rem;padding-bottom:5rem">
        
        <div class="col align-self-center">
            <h2 class=" " style="font-weight:bold" >Dažniausiai užduodami klausimai</h2>
            
            <h3 class="red"> Jei dar turite klausimų, susisiekite!</h3>
            <a href="{{URL::to('susisiekite')}}" class="btn btnn btn-grey-light"> Susisiekite </a>
        </div>
    <div class="col carr">
        <div class="">
        <div class="rCircle bigRCircle">
            <img class="car" src="{{asset('images/car.png')}}">
        </div>
        </div>
</div>

    </div>

















    <!-- Klausimai-->
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">1. Ar galios didinimas nepakenks automobilio varikliui, sankaba</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                Profesionaliai atliktas galios didinimas neigiamos įtakos automobilio mechaniniams mazgams neturės. Ypatingai svarbu prieš atliekant galios didinimo programavimo darbus gerai įvertinti automobilio galimybes bei techninę būklę , jei yra gedimų, pirma išspręsti jų tvarkymo klausimus ir tik tuomet didinti galią. Remapo servise naudojama pažangi, originali įranga, o kiekvienas automobilis programuojamas individualiai. Tai leidžia maksimaliai išpildyti kliento lūkesčius ir tuo pačiu apsaugoti automobilį nuo per greito agregatų susidėvėjimo.

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">2. Ar atlikus galios didinimą padidėja išmetamųjų dujų kiekis?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                Ne, profesionaliai atlikus galios didinimą išmetamųjų dujų kiekis nepadidės ir normų neviršins. Dūmingumas po galios didinimo padidėja tik tuo atveju, jeigu automobilis turi techninių gedimų arba galios didinimas buvo atliktas mėgėjiškai ir neprofesionaliai.
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">3. Ar atliktas galios didinimas ar kiti programavimo darbai netrukdys sėkmingai praeiti techninės apžiūros?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                Ne, galios didinimas nesukelia jokių neigiamų padarinių, kurie trukdytų praeiti techninę apžiūrą.
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">4. Kuo skiriasi Stage 1, Stage 2 ir Stage 3 galios didinimas?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                Iš esmės tai gana laisvai interpretuojamos sąvokos, dėl kurių egzistuoja įvairių nuomonių. Paprastai tariant, jos apibūdina, kiek stipriai yra modifikuojamas automobilis galios prieaugiui pasiekti. Visur sutariama, kad Stage 1 yra galios didinimas tik programuojant automobilio variklio valdymo bloką. Stage 2 gali būti stipresnis galios didinimas tik programuojant, arba kartu atliekant pagrindinių mazgu mechanines modifikacijas. Stage 3 – esminis automobilio mechaninių mazgų perdarymas siekiant maksimalių galios prieaugio rezultatų.
                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">5. Kuo skiriasi chip tuning ir remapas?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                Iš esmės niekuo, tai dvi sąvokos reiškiančios tą patį – galios didinimą programuojant automobilio variklio valdymo bloką.

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">6. Nuo ko priklauso galios didinimo kaina?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                Pirmiausia, nuo suteikiamų paslaugų kokybės, naudojamos įrangos, turimų žinių bei sukauptos patirties. Toliau – nuo automobilio modelio, variklio, norimų rezultatų ir kt.

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">7. Ar atliekant galios didinimą privalu eliminuoti ekologines sistemas?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c p-2">
                Tikrai ne, jei jose nėra gedimų. Tačiau kai kuriems modeliams, norint pasiekti Stage 2 rezultatus reikalinga eliminuoti DPF.

                </p>
                
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="form duk-card">
    
            <div class="modal-header p-1 m-auto">
                <h5 class="modal-title a-c " id="exampleModalLongTitle">8. Kas yra Power Box įrenginys ir kaip jis veikia?</h5>
            </div>
            
            <div class="modal-body p-2 m-auto">
                <p class="a-c">
                Apie Power Box platesnė informacija pateikiama skiltyje „Paslaugos“. Atkreipiame dėmesį, kad Remapo Power Box yra naujos kartos, aukščiausios kokybės ir ypatingai rekomenduojami gamintojo garantiją turintiems automobiliams.Neradai atsakymo į rūpimus klausimus? Susisiek su mumis: info@remapas.lt

                </p>
                
            </div>
        </div>
    </div>



</div>



@stop