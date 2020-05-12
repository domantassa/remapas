
@extends('layouts.app')


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

@section('content')


<div class="container mt-5" style="margin:auto;max-width:1000px">
    <div class="row"><h4>Tools</h4></div>
    <div class="row">
        <div class="col-6 tab tab-begin" id="1"><div  class="d-flex align-self-center" style="height:100%"><img class="p-2  my-2"  src="{{asset('images/magic.png')}}" alt="magic.png"  style="width:100%;object-fit: contain;"></div></div>
        
    
      
        <div class="col-6 tab" id="2"><div  class="d-flex align-self-center" style="height:100%"><img class="p-2  my-2"  src="{{asset('images/alientech.png')}}" alt="alientech.png"  style="width:100%;object-fit: contain;"></div></div>
     
        
      
      
    </div>

    <div class="row">
        
            <div class="tab-content tools">
                <div id="content-1" class="content content-begin p-5">
                       
                        <div class="title">
                        @lang('Flex modulis')
                        </div>
                        <div class="body">
                        @lang('Šis prietaisas naudojamas nesudėtingam automobilio programinės įrangos tiuningavimui, perprogramavimui ar modifikavimui, interneto sąsaja atskleidžia pilną šio prietaiso potencialą. Prijungimas vyksta tiesiogiai per OBD jungtį. Pažangiems remonto darbams atlikti naudokite Flexbox modulį, kuris leidžia programuoti BDM, Bootloader, JTAG ir AUD režimais. Prietaisas yra pajėgus aptikti galimas prisijungimo arba ryšio klaidas.')
                        </div>
                        <div class="title">
                        @lang('Techniniai parametrai')
                        </div>
                    
                        <div class="body">
- @lang('USB jungtis')<br>
- @lang('LED indikatoriai')<br>
- @lang('Maitinimas'): 12V 5A/24V 2.5A<br>
- @lang('Komunikacijos jungtys'): ISO 15765:2 x CAN; ISO 99141-2 & ISO 14230: 2 x K-LINE, 1xL-LINE; Ethernet ; SAE J1850 PWM, VPW; SAE J1708<br>
- @lang('Universali jungtis: Universalios 15 In/Out jungtys,')<br>
- @lang('Įtampos: vidinė 3.3V- 5V, išorinė 1.8 – 5.5V')<br>
- JTAG, BDM, AUD, UART<br>
- @lang('Apsaugos: ESD 1kV, viršįtampiai, perkrovos, perkaitimas, poliarizacija, USB galvaninė atskyra.')<br>


                        </div>
                        <div class="title">
                        @lang('Palaikomu automobiliu sarasa galite rasti cia :')
                     </div>
                 
                     <div class="body">
                    <select class="form-select form-control" style="max-width:200px" ><option>@lang('Raskite automobilį')</option></select>
                     </div>
                     <div class="title">
                     @lang('Kodėl mes renkamės magpro?')
                     </div>
                 
                     <div class="body">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac auctor augue mauris augue neque. Lacinia at quis risus sed. Pulvinar elementum integer enim neque volutpat. Massa placerat duis ultricies lacus sed turpis. Proin sed libero enim sed faucibus turpis in eu mi. Eget sit amet tellus cras adipiscing. Tortor consequat id porta nibh venenatis cras sed. Pharetra vel turpis nunc eget lorem dolor. Porta lorem mollis aliquam ut. Nibh praesent tristique magna sit amet purus gravida quis blandit.
                     </div>
                     <div class="title">
                     @lang('Bazinis rinkinys') <br>
                     </div>
                 
                     <div class="body">
                        <div class="row">
                            <div class="col-sm-8">
                            <p>@lang('Paprasčiausias pasirinkimas norint dirbti su automobiliais per obd jungtį bei neardant valdymo bloko. Turi galimybe dirbti su beveik visais naujausiais automobilių variklių ir automatinių pavarų dėžių blokais.')<br>
                            <br>
                            <span class="red">FLEX SLAVE KIT + get free Remapas support subscribtion for 1 years + 200crd</span> <br><br>
                            <span class="bold">@lang('Kaina') : 2500 EUR + PVM </span>
                            </p>
                            </div>
                            
                            <div class="col-sm-4">
                                <img style="width:100%" src="{{asset('images/1.png')}}" alt="1.png">

                            </div>
                        </div>
                     </div>

                     <div class="title">
                     @lang('Vidutinis rinkinys')<br>
                     </div>
                 
                     <div class="body">
                        <div class="row">
                            <div class="col-sm-8">
                                <p>@lang('šis rinkinys skirtas dirbantiems su naujesniais Delphi, Marelli, Delco, Continental/Siemens, Bosch edc16 ir kitais valdymo blokais, kurių  nuskaitymas atliekamas tiesiai jungiantis į jį. Tad prie Bazinio rinkinio pridedame universalų stovą su adatomis, bei bdm adapteriais.')
                                <br>@lang('Turi galimybe dirbti su beveik visais naujausiais automobilių variklių ir automatinių pavarų dėžių blokais.')  

 <br>
 <br>
                                <span class="red">FLEX SLAVE KIT + FLEXible Bench+ get free remapas support subscribtion for 1 years + 250crd .</span> <br><br>
                                <span class="bold">@lang('Kaina') : 3410 EUR + PVM  </span>
                               
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <img style="width:100%" src="{{asset('images/3.png')}}" alt="3.png">
                                <img style="width:100%" src="{{asset('images/4.png')}}" alt="4.png">
                            </div>
                        </div>
                     </div>
                     <div class="title">
                     @lang('Pilniausias rinkinys')
                     <br>
                     </div>
                 
                     <div class="body">
                        <div class="row">
                            <div class="col-sm-8">
                                <p>@lang('šiame rinkinyje papildomai nei Vidutiniame rinkinyje diagnostinė įranga, kurios pagalba jūs galėsite daugiau nei 80 automobilių modelių, padaryti log failus, reikiamus prieš individualų galios didinimą bei atlikti reikiamus reset, adaptacijas prieš ir po programavimo darbų. Be diagnostikos įrangos programavimo darbai neįsivaizduojami, tada šis pasiūlymas tinka visiems programuotojams.')
@lang('Turi galimybe dirbti su beveik visais naujausiais automobilių variklių ir automatinių pavarų dėžių blokais.')

  <br>
  <br>
                                <span class="red">FLEX SLAVE KIT + FLEXible Bench + AUTEL MaxiSys MS908S Pro (su dviejų metų atnaujinimais)+ get free remapas support subscribtion for 1 years + 350crd .</span> <br>
                                <br><span class="bold">@lang('Kaina') : 5600 EUR + PVM </span>
                               
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <img style="width:100%" src="{{asset('images/4.png')}}" alt="4.png">
                                <img style="width:100%" src="{{asset('images/5.png')}}" alt="5.png">
                            </div>
                        </div>
                     </div>
                     <div class="title">
                     
                     </div>
                 
                     <div class="body">
                    
                     </div>
                     <div class="title">
                     
                     </div>
                 
                     <div class="body">
                    
                     </div>
                     <div class="title">
                     
                     </div>
                 
                     <div class="body">
                    
                     </div>

                        </div>



            <div id="content-2" class="content p-5"> 
                    <div class="title">
                    @lang('Programavimo prietaisas KESS v2 ALIENTECH')
                     </div>
                 
                     <div class="body">
                     @lang('Norėdami sukurti KESSv2, Alientech konstruktorių ir inžinierių komanda sukūrė naują prietaisą, kuris sąveikauja su programine įranga labai paprastai ir funkcionaliai: įvertinama variklio ir akumuliatoriaus būklė, ir tuo atveju, jei atsiranda kokie nors trigdžiai jūsų kompiuteryję, prietaisas užbaigia pradėtą programą individualiai.')
                     </div>
                     <div class="title">
                     @lang('Naujos kartos programinė įranga')
                     </div>
                 
                     <div class="body">
                     @lang('Pirmą kartą naudodamiesi KESSv2 jūs suprasite, kaip lengvai ir greitai jis veikia, sparčiai atsinaujina, atsisiunčia veiklos manualus, nuskaito ECU informaciją, tvarko failus ir sukuria reikiamą failą reikiamu momentu.  Jums nereiks jaudintis dėl šio aparato prijungimo. KESS Suite programinė įranga tiekiama su OBD Programmer‘iu, kuris padeda Jums pasirinkti reikiamą automobilį, motociklą, sunkvežimį, traktorių, arba ECU prietaisą, kurį norite derinti.')
                     </div>
                     <div class="title">
                     @lang('Atkūrimo ir automatinės funkcijos:')
                     </div>
                 
                     <div class="body">
                     @lang('Chip tuning įranga KESSv2 negaišta laiko: prieš pradedant redaguoti betkokį failą, KESSv2 ištaiso ,,CHECKSUM“, ištikrina ir pašalina klaidas ECU, patikrina akumuliatoriaus įtampą, išsaugo įpurškimo parametrus, ir tik tada pradeda dirbti.  Jūs suklydote, netyčia pakeitėte parametrus? Atkūrimo funkcija leidžia atstatyti ECU gamyklinius parametrus.')
                     </div>
                     <div class="title">
                     @lang('Automobiliams, motociklams, sunkvežimiams ir žemės ūkio transportui:')
                     </div>
                 
                     <div class="body">
                     @lang('Čipavimo įranga KESSv2 palaiko daugelį automobilių, motociklų, sunkvežimių ir, be didelio vargo, atlieka išsamią ir kokybišką diagnostiką. Prijungus prietaisą prie transporto priemonės ir pasirinkus jos markę, vos per kelias akimirkas galite pradėti dirbti.')
                     </div>
                     <div class="title">
                     @lang('Kess V2 funkcijos ir apsaugos:')
                     </div>
                 
                     <div class="body">
                     @lang('')

                            <ul>
                                <li>1. Akumuliatoriaus įtampos rodikliai realiu laiku</li>
                                <li>2. lang('Parametrų atkūrimo funkcija')</li>
                                <li>3. @lang('Checksum automatinis koregavimas')</li>
                                <li>4. @lang('BOOT-LOADER funkcija ')</li>
                                <li>5. @lang('Programatorių valdymas')</li>
                                <li>6. @lang('ScanTool funkcija, skirta pašalinti diagnostikos klaidas (DTC)')</li>
                                <li>7. @lang('Reguliuojamas darbo greitis')</li>
                                <li>8. @lang('Pilna sąsaja su ECM Titanium')</li>
                                
                            </ul>
                        KAINA: 900.00 Eur + PVM
                     </div>
                     <div class="title">
                     @lang('Protokolų kainos:')
                     </div>
                 
                     <div class="body">
                        <ul>
                            <li>14P600KS01 KESSv2 Slave (Tool) Tool and following cables: 144300KCAN - 144300K201 900,00</li>
                            <li>14P600KS03 Car - Bike OBD Protocols Slave protocol activation for Cars, LCVs and Bikes. Included 12 months of subscription. 1.100,00</li>
                            <li>14P600KS02 Truck OBD Protocols Slave protocol activation for Trucks. Included 12 months of subscription. 1.700,00</li>
                            <li>14P600KS05 Agriculture OBD Protocols Slave protocol activation for Agricultural Vehicles. Included 12 months of subscription. 1.700,00</li>
                            <li>14P600KS10 Marine OBD Protocols Slave protocol activation for Boats. Included 12 months of subscription. 700,00</li>
                            <li>14P600KS07 Car - Bike - Truck OBD Protocols Slave protocol activation for Cars, LCVs, Bikes and Trucks. Included 12 months of subscription. 2.500,00</li>
                            <li>14P600KS08 Car - Bike - Agriculture OBD Protocols Slave protocol activation for Cars, LCVs, Bikes and Agricultural Vehicles. Included 12 months of subscription. 2.500,00</li>
                            <li>14P600KS09 Truck - Agriculture OBD Protocols Slave protocol activation for Trucks and Agricultural Vehicles. Included 12 months of subscription. 2.500,00</li>
                            <li>14P600KS06 Full OBD Protocols Slave protocol activation for all groups. Included 12 months of subscription. 3.100,00</li>
                            
                        </ul>


                     </div>
                     <div class="title">
                     @lang('Programavimo prietaisas K-TAG ALIENTECH')
                     </div>
                 
                     <div class="body">
                     @lang('Šis prietaisas patenkins visus jūsų poreikius, nes veikia greitai ir patikimai. Tai naujas Alientech gaminys, skirtas Azijoje pagamintoms transporto priemonėms.')
                     <br>
                     @lang('Paprastai J-Tag programmer‘iai prieinami tik stambiai pramonei, tačiau vangiai dirba su Chip tuning funkcija. Naudojant esminius poreikius, Alientech sujungė  J-Tag, Motorola BDM / Nexus, Bood-Loader Mitsubishi / Infineon, Tricore/ST linijas į vieną produktą.')
                     
                     <br>
                     @lang('Be to, K-Suite programinė įranga leidžia Jums greitai pasiekti visus variklio valdymo blokų duomenis bei automatiškai atpažįsta prietaisą prijungtą prie Jūsų kompiuterio.')
                     </div>
                     <div class="title">
                     @lang('Nauja programinė įranga daugeliui transporto priemonių')
                     </div>
                 
                     <div class="body">
                     @lang('Alientech plačiai naudojama programinė įranga sklandžiai dirba su visais Alientech chip tuning įranga. Išmokti naudotis K-TAG čipavimo įranga daug laiko netrunka, nes visos programos ir funkcijos veikia panašiu principu. Perkandus vieną funkciją ar programą, lengvai perprasite ir likusias, o visa įranga yra išsami, konkreti ir supaprastinta.')
                     </div>
                     <div class="title">
                     @lang('Išskirtinumas')
                     </div>
                 
                     <div class="body">
                     @lang('Skirtingai nuo daugelio ECU programmer‘ių, K-TAG aprūpintas funkcijomis, kurių konkrečiai Jums reikia dirbant. Turėdami šį prietaisą, Jūs be vargo, iškart galėsite pradėti dirbti.')<br>
                     @lang('Įranga komplektuojama nauja ir kartu su baziniu kabelių rinkiniu, reikalingu nuskaityti didžiajai daugumai automobilių. Kartu su šia įranga reikės pirkti protokolus, priklausomai nuo automobilių, kuriuos norėsite programuoti. Dažniausiai žmonės nori automobilių/motociklų protokolų, nurodytų Ktag programinėje įrangoje. Prenumeratų pirkti nereikės, kadangi pirmi dvylika mėnesių yra įskaičiuoti bet kuriame protokolų rinkinyje.')<br>
                     @lang('KTag yra ECU ištraukimo įrenginys, kai išeina, geriau naudoti Kess, kadangi KTag reikalauja daugiau darbo laiko. Jei pirkti tik kurį nors vieną iš šių įrenginių, geriau pradėti nuo Kess.')<br>
                     @lang('Svarbu žinoti, kad ne taip kaip Slave įrangos versija, Master versija nėra pririšta prie jokio specifinio pardavėjo, todėl Master versijos sąvininkas gali pirkti failus iš bet ko. Tačiau didžioji dauguma pardavėjų Master versijoms failus parduoda brangiau, bei kainos yra didesnes tiek pačių prietaisų, tiek programinės įrangos atžvilgiu. Jei tik pradedate užsiimti Chip Tuning veikla, nerekomenduotina pradėti su Master versija.')<br>
                     <br>
                     @lang('Komplektuojami kabeliai yra nurodomi pačio KTag prietaiso, priklausomai nuo programuojamo automobilio. Komplektacijoje įskaičiuoti šie kabeliai:')
                     <ul>
                        <li>- AF3401001 - 2 male pin antgaliai (2.54 mm) ir 10 female pin antgaliai (2.54 mm)</li>
                        <li>- 144300T100 - 2 juostiniai kabeliai</li>
                        <li>- 144300T101 - 2 juostiniai kabeliai</li>
                        <li>- 144300T102 - 2 juostiniai kabeliai</li>
                        <li>- 144300T103 - 2 juostiniai kabeliai</li>
                        <li>- 144300T104 - 2 vaivorikštiniai juostiniai kabeliai</li>
                        <li>- 144300T105 - 2 vaivorikštiniai juostiniai kabeliai</li>
                        <li>- 144300T106 - 2 vaivorikštiniai juostiniai kabeliai</li>

                     </ul>
                     
                     @lang('Kartais norint prisijungti su Ktag prie tam tikrų ECU reikia šiek tiek lituoti. Tam pridedamos plokštės kartu su KTag slave prietaisu:')
                     <ul>
                        <li>- 14AS00T01S - Plokštė, kuri lituojama prie Delphi DCI ECU</li>
                        <li>- 14AS00T03S - Plokštė, kuri lituojama prie Siemens ir Marelli ECU</li>
                        <li>- 14AS00T04S - Plokštė, kuri lituojama prie Delphi Dcm ECU</li>
                    </ul>
                     
                     @lang('Alientech negali pasiūlyti daug pagalbos Master versijai - jei jums reikia pagalbos nuskaitant/įrašant failus, Master versija tikriausiai nėra tinkamas variantas jums.')
                     <br>
                     <br>
                     KAINA: 550.00 Eur + PVM @lang('')
                     </div>
            </div>

            </div>
            </div>


        
    </div>

</div>

<script>

 $( ".tab" ).click(function() {

        
    $("#content-"+$(".tab-begin").attr('id')).removeClass("content-begin");
    $(".tab-begin").removeClass("tab-begin");
   

        $("#content-"+$( ".tab-active" ).attr('id')).removeClass("content-active");
        $(".tab-active").removeClass("tab-active");
    
        

     
    
     $( this).addClass( "tab-active" );
  $( this).addClass( "tab-active" );
    // alert(this);
    $("#content-"+$( ".tab-active" ).attr('id')).addClass( "content-active" );
    



});
</script>
@stop



