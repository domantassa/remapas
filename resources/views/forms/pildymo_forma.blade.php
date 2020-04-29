<!-- Button trigger modal -->





<script>


</script>

 

<div class="container">
    <div class="modal-content form">
      <div class="modal-header p-1">
       <h5 class="modal-title a-c " id="exampleModalLongTitle">Dealer Registration Form</h5>
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
                          Personal details
                        </div>
                        <div class="form-group">    
                            <input name="Email" type="text"  class="form-control form-text" placeholder="Email" required>
                        </div>
                        <div class="form-group">    
                            <input name="Password" type="password" class="form-control form-text" placeholder="Password" required>
                        </div>
                        <div class="form-group">    
                            <input name="First Name" type="text" class="form-control form-text" placeholder="First Name" required>
                        </div>
                        <div class="form-group">    
                            <input name="Last Name" type="text" class="form-control form-text" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">    
                            <input name="Mobile phone" type="text" class="form-control form-text" placeholder="Mobile phone" required>
                        </div>

                    </div>
                   
                  
                    <div class="form-col-group">
                        <div class="header a-c">
                          Company's Social Accounts
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
                        Company details
                        </div>
                        <div class="form-group">    
                            <input name="Company Name" type="text"  class="form-control form-text" placeholder="Company Name" >
                        </div>
                        <div class="form-group">    
                            <input name="Vat Number" type="text" class="form-control form-text" placeholder="Vat Number">
                        </div>
                        <div class="form-group">    
                            <input name="Dealer Map" type="text" class="form-control form-text" placeholder="Dealer Map">
                        </div>
                        <div class="form-group">    
                            <input name="Company's website" type="text" class="form-control form-text" placeholder="Company's website">
                        </div>
                        <div class="form-group">    
                            <input name="Company desciption" type="text" class="form-control form-text" placeholder="Company desciption">
                        </div>

                        <div class="form-group">    
                            <select  name="own tools" class="form-control form-select" id="Own Tools?"   >
                               <option value="not selected" id="default select" selected disabled hidden>Own Tools?</option>
                               <option value="true"  >Yes</option>
                                <option value="false"  >No</option>
                          </select>
                        </div>
                        <div class="form-group">    
                            <select  name="have tools" class="form-control form-select" id="Already Have Tools?"   >
                            <option value="not selected" id="default select" selected disabled hidden>Already Have Tools?</option>
                            <option value="true"  >Yes</option>
                            <option value="false"  >No</option>
                          </select>
                        </div>
                    
                    </div>

                    


                  </div>


                  <div class="col-sm col-form ">
                  <div class="form-col-group">
                        <div class="header a-c">
                        Billing address
                        </div>
                        <div class="form-group">    
                            <input name="BlAddress Line" type="text" id="Ba-address-line" class=" Billing-address form-control form-text" placeholder="Address Line">
                        </div>
                        <div class="form-group">    
                            <input name="BlTown" type="text" id="Ba-address-town"  class=" Billing-address form-control form-text" placeholder="Town">
                        </div>
                        <div class="form-group">    
                            <input name="BlPostcode/Zip Code" id="Ba-address-postcode" type="text" class=" Billing-address form-control form-text" placeholder="Postcode/Zip Code">
                        </div>
                        <div class="form-group">    
                            <input name="BlCountry/state"  id="Ba-address-country"  type="text" class=" Billing-address form-control form-text" placeholder="Country/state">
                        </div>
                        <div class="form-group">    
                            <select class=" Billing-address form-control form-select country" id="Ba-Select-Country"  >
                          @include('forms.countries')  
                          </select>
                        </div>



                    </div>

                  <div class="form-col-group">
                        <div class="header a-c">
                          Trading address
                        </div>
                        <div class="form-group">    
                            <input type="checkbox"  class="same-as-billing" id="same-as-billing">
                            <label for="same-as-billing" class="same-as-billing">
                                Same as billing address
                            </label>
                        </div>
                        <div class="form-group">    
                            <input name="TrAddress Line"  id="address-line" type="text"  class=" Trading-address form-control form-text" placeholder="Address Line">
                        </div>
                        <div class="form-group">    
                            <input name="TrTown" type="text"   id="address-town" class=" Trading-address form-control form-text" placeholder="Town">
                        </div>
                        <div class="form-group">    
                            <input name="TrPostcode/Zip Code"  id="address-postcode" type="text" class=" Trading-address form-control form-text" placeholder="Postcode/Zip Code">
                        </div>
                        <div class="form-group">    
                            <input name="TrCountry/state"   id="address-country" type="text" class="Trading-address form-control form-text" placeholder="Country/state">
                        </div>

                        <div class="form-group">    
                          
                            <select class=" Trading-address form-control form-select " id="Select-Country"  >
                          @include('forms.countries')  
                          </select>
                          
                        </div>
                        
</div>
</div>


        </form>



      </div>
      <div class="modal-footer">
        <div class="a-c">
          <div><input name="" type="checkbox" id="privacy"><label for="privacy" class="privacy">I agree to Remapas.Lt storing my data to deal to this enqulry - <a>Privacy policy</a></label ></div>
        <!--<button type="button" class="btn btn-red" data-dismiss="modal">Reset</button>-->
        <button type="button" class="btn btnn btn-red" onclick="reset()">Reset</button>
        <button type="button" class=" btn btnn btn-red">Submit Application</button>
    </div>
      </div>
      <input name="" type="submit">
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

