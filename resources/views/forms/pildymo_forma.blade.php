<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>







 


<!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content form">
      <div class="modal-header p-1">
       <h5 class="modal-title a-c " id="exampleModalLongTitle">Dealer Registration Form</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        

        <form>
            <div class="row">

                <div class="col-sm col-form ">
                 
                  <div class="form-col-group">
                        <div class="header a-c">
                          Personal details
                        </div>
                        <div class="form-group">    
                            <input type="text"  class="form-control form-text" placeholder="Email">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Password">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="First Name">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Last Name">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Mobile">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Phone">
                        </div>
                    </div>
                   
                  
                    <div class="form-col-group">
                        <div class="header a-c">
                          Company's Social Accounts
                        </div>
                        <div class="form-group">    
                            <input type="text"  class="form-control form-text" placeholder="Facebook">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Twitter">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="G-plus">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Instagram">
                        </div>
                    </div>
                    </div>
                
                
                  <div class="col-sm col-form ">
                  <div class="form-col-group">
                        <div class="header a-c">
                        Company details
                        </div>
                        <div class="form-group">    
                            <input type="text"  class="form-control form-text" placeholder="Company Name">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Vat Number">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Dealer Map">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Company's website">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Company desciption">
                        </div>

                        <div class="form-group">    
                            <select class="form-control form-select" id="Own Tools?"   >
                               <option value="" id="default select" selected disabled hidden>Own Tools?</option>
                               <option value="true"  >Yes</option>
                                <option value="false"  >No</option>
                          </select>
                        </div>
                        <div class="form-group">    
                            <select class="form-control form-select" id="Already Have Tools?"   >
                            <option value="" id="default select" selected disabled hidden>Already Have Tools?</option>
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
                            <input type="text"  class="form-control form-text" placeholder="Address Line">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Town">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Postcode/Zip Code">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Country/state">
                        </div>
                        <div class="form-group">    
                            <select class="form-control form-select" id="Select Country"  >
                          @include('forms.countries')  
                          </select>
                        </div>



                    </div>

                  <div class="form-col-group">
                        <div class="header a-c">
                          Trading address
                        </div>
                        <div class="form-group">    
                            <input type="checkbox"  class="" id="same-as-billing">
                            <label for="same-as-billing">
                                Same as billing address
                            </label>
                        </div>
                        <div class="form-group">    
                            <input type="text"  class="form-control form-text" placeholder="Address Line">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Town">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Postcode/Zip Code">
                        </div>
                        <div class="form-group">    
                            <input type="text" class="form-control form-text" placeholder="Country/state">
                        </div>

                        <div class="form-group">    
                          
                            <select class="form-control form-select" id="Select Country"  >
                          @include('forms.countries')  
                          </select>
                          
                        </div>
                        
</div>
</div>


        </form>



      </div>
      <div class="modal-footer">
        <div class="a-c">
          <div><input type="checkbox" id="privacy"><label for="privacy" class="privacy">I agree to Remapas.Lt storing my data to deal to this enqulry - <a>Privacy policy</a></label ></div>
        <!--<button type="button" class="btn btn-red" data-dismiss="modal">Reset</button>-->
        <button type="button" class="btn btnn btn-red" onclick="reset()">Reset</button>
        <button type="button" class=" btn btnn btn-red">Submit Application</button>
    </div>
      </div>
    </div>
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
$placeholder = this.id;

$html='<option value="" selected disabled hidden>'+$placeholder+'</option>';

$( this ).html($( this ).html( )+$html );
});

}






</script>

