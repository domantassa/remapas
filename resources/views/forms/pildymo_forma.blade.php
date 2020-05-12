<!-- Button trigger modal -->



<?php

$s="'";
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 

<div class="container">
    <div class="modal-content form">
      <div class="modal-header p-1">
       <h5 class="modal-title a-c " id="exampleModalLongTitle">{{ __('Dealer Registration Form') }}</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      
        <form action="{{route('form.dyler',App::getLocale())}}" method="post">
            @csrf
  
      <div class="modal-body">
        

            <div class="row">

                <div class="col-sm col-form ">
                 
                  <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Personal details') }}
                        </div>
                        <div class="form-group">    
                            <input name="Email" type="text"  class="form-control form-text" placeholder="{{ __('Email') }}" required>
                        </div>
                        <div class="form-group">    
                            <input name="Password" type="password" class="form-control form-text" placeholder="{{ __('Password') }}" required>
                        </div>
                        <div class="form-group">    
                            <input name="First Name" type="text" class="form-control form-text" placeholder="{{ __('First Name') }}" required>
                        </div>
                        <div class="form-group">    
                            <input name="Last Name" type="text" class="form-control form-text" placeholder="{{ __('Last Name') }}" required>
                        </div>
                        <div class="form-group">    
                            <input name="Mobile phone" type="text" class="form-control form-text" placeholder="{{ __('Mobile phone') }}" required>
                        </div>

                    </div>
                   
                  
                    <div class="form-col-group">
                        <div class="header a-c">
                        {{ __("Company's Social Accounts") }}
                        </div>
                        <div class="form-group">    
                            <input name="Facebook" type="text"  class="form-control form-text" placeholder="Facebook">
                        </div>
                        <div class="form-group">    
                            <input name="Twitter" type="text" class="form-control form-text" placeholder="Twitter">
                        </div>
                        <div class="form-group">    
                            <input name="G-plus" type="text" class="form-control form-text" placeholder="G-plus">
                        </div>
                        <div class="form-group">    
                            <input name="Instagram" type="text" class="form-control form-text" placeholder="Instagram">
                        </div>
                    </div>
                    </div>
                
                
                  <div class="col-sm col-form ">
                  <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Company details') }}
                        </div>
                        <div class="form-group">    
                            <input name="Company Name" type="text"  class="form-control form-text" placeholder="{{ __('Company Name') }}" >
                        </div>
                        <div class="form-group">    
                            <input name="Vat Number" type="text" class="form-control form-text" placeholder="{{ __('Vat Number') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Dealer Map" type="text" class="form-control form-text" placeholder="{{ __('Dealer Map') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Company's website" type="text" class="form-control form-text" placeholder='{{ __("Company".$s."s website") }}'>
                        </div>
                        <div class="form-group">    
                            <textarea name="Company desciption" type="text" class="form-control form-text" placeholder="{{ __('Company desciption') }}"></textarea>
                        </div>

                        <div class="form-group">    
                            <select  name="own tools" class="form-control form-select" id="Own Tools?"   >
                               <option value="not selected" id="default select" selected disabled hidden>{{ __('Own Tools?') }}</option>
                               <option value="true"  >{{ __('Yes') }}</option>
                                <option value="false"  >{{ __('No') }}</option>
                          </select>
                        </div>
                        <div class="form-group">    
                            <select  name="have tools" class="form-control form-select" id="Already Have Tools?"   >
                            <option value="not selected" id="default select" selected disabled hidden>{{ __('Already Have Tools?')}}</option>
                            <option value="true"  >{{ __('Yes') }}</option>
                            <option value="false"  >{{ __('No') }}</option>
                          </select>
                        </div>
                    
                    </div>

                    


                  </div>


                  <div class="col-sm col-form ">
                  <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Billing address') }}
                        </div>
                        <div class="form-group">    
                            <input name="Billing Address Line" type="text" id="Ba-address-line" class=" Billing-address form-control form-text" placeholder="{{ __('Address Line') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Billing Town" type="text" id="Ba-address-town"  class=" Billing-address form-control form-text" placeholder="{{ __('Town') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Billing Postcode/Zip Code" id="Ba-address-postcode" type="text" class=" Billing-address form-control form-text" placeholder="{{ __('Postcode/Zip Code') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Billing Country/state"  id="Ba-address-country"  type="text" class=" Billing-address form-control form-text" placeholder="{{ __('Country/state') }}">
                        </div>
                        <div class="form-group">    
                            <select class=" Billing-address form-control form-select country" name="Billing Country" id="Ba-Select-Country"  >
                          @include('forms.countries')  
                          </select>
                        </div>



                    </div>

                  <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Trading address') }}
                        </div>
                        <div class="form-group">    
                            <input type="checkbox"  class="same-as-billing " id="same-as-billing">
                            <label for="same-as-billing" class="same-as-billing">
                            {{ __('Same as billing address') }}
                            </label>
                        </div>
                        <div class="form-group">    
                            <input name="Trading Address Line"  id="address-line" type="text"  class=" Trading-address form-control form-text" placeholder="{{ __('Address Line') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Trading Town" type="text"   id="address-town" class=" Trading-address form-control form-text" placeholder="{{ __('Town') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Trading Postcode/Zip Code"  id="address-postcode" type="text" class=" Trading-address form-control form-text" placeholder="{{ __('Postcode/Zip Code') }}">
                        </div>
                        <div class="form-group">    
                            <input name="Trading Country/state"   id="address-country" type="text" class="Trading-address form-control form-text" placeholder="{{ __('Country/state') }}">
                        </div>

                        <div class="form-group">    
                          
                            <select name="Trading Country" class=" Trading-address form-control form-select " id="Select-Country"  >
                          @include('forms.countries')  
                          </select>
                          
                        </div>
                        
</div>
</div>


        </form>



      </div>
      <div class="modal-footer">
        <div class="a-c">

</label>
          <div><input name="" type="checkbox" class="" id="privacy" required><label for="privacy" class="privacy"> {{ __('I agree to Remapas.Lt storing my data to deal to this enqulry') }} - <a>{{ __('Privacy policy') }}</a></label ></div>
        <!--<button type="button" class="btn btn-red" data-dismiss="modal">Reset</button>-->
        <button type="button" class="btn btnn btn-red" onclick="reset()">{{ __('Reset') }}</button>
        <button type="submit" class=" btn btnn btn-red">{{ __('Submit Application') }}</button>
    </div>
      </div>
            <form>
    </div>
</div>
<script>

function reset(){
$inputs_text = $(".form-text");
$inputs_select = $(".form-select");
$inputs_text.each(function() {
  $( this ).val( "" );
});

$inputs_select.each(function() {
$placeholder = "ASda";

$html='<option value="" selected disabled hidden>'+$placeholder+'</option>';

$( this ).html($( this ).html( )+$html );
});

}
$(".Billing-address").keyup(function(){
   alert(1);
  if($( "#same-as-billing" ).prop( "checked" )	)
    {
        $(".Trading-address").each(function(){
        
        $id=$(this).attr("id");
         $id="Ba-"+$id;
         
        $(this).val($("#"+$id).val());
        $(this).attr("readonly",true);
        //$x++;
    });

    }
});
$(".country").click(function(){
    if($( "#same-as-billing" ).prop( "checked" )	)
    {
        $(".Trading-address").each(function(){
        
        $id=$(this).attr("id");
         $id="Ba-"+$id;
         
        $(this).val($("#"+$id).val());
        $(this).attr("readonly",true);
        //$x++;
    });

    }


});
$("#same-as-billing").click(function(){


if($( "#same-as-billing" ).prop( "checked" ))
{
    $(".Trading-address").each(function(){
        
        $id=$(this).attr("id");
         $id="Ba-"+$id;
         
        $(this).val($("#"+$id).val());
        $(this).attr("readonly",true);
        //$x++;
    });


}
else{
    $(".Trading-address").each(function(){
        $(this).attr("readonly",false);
    });
}


});









</script>

