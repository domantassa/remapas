
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
                     as
                     </div>
                 
                     <div class="body">
                    as
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



