@extends('layouts.app')
@section('content')


<div  class="row mtem fade-in">

    <div class="col-md-6 rSection">
        <div class="rcontent m-5">
        <form action="{{route('form.dyler',App::getLocale())}}" method="post">
        <h1 class="bold">@lang('Turite klausimų? Susisiekite!')</h1>
            @csrf
            <div class="form">
            <div class="d-flex">
                         <div class="form-group pr-2" style="width:50%">    
                            <input name="First Name" type="text" class="form-control form-text" placeholder="{{ __('First Name') }}" required>
                        </div>
                        <div class="form-group pl-2" style="width:50%">    
                            <input name="Last Name" type="text" class="form-control form-text" placeholder="{{ __('Last Name') }}" required>
                        </div>
                        </div>
                        <div class="form-group">    
                            <input name="Email" type="text" class="form-control form-text" placeholder="{{ __('Email') }}" required>
                        </div>
                        <div class="form-group">    
                            <textarea rows="5"  name="Message" type="text" class="form-control form-text" style="border-radius:10px" placeholder="{{ __('Jūsų žinutė') }}" required></textarea>
                        </div>
                        
    <div id="mail-status"></div>

            </div>


        <button type="submit" class="btn  btn-black btnn" style="text-decoration:none;border-radius:20px;width:150px">@lang('Susisiekti')</button><a href="{{route('duk',App::getLocale() )}}" class="btn btn-black btnn" style="text-decoration:none;border-radius:20px;width:150px">@lang('D.U.K')</a>
        </form>
    </div>
    </div>
   
  
    <div class="col-md-6 gSection">
        <div class="rcontent m-5">
            

                <div class="form">

                <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Remapas Marijampolėje') }}
                        </div>
                        <div class="p-2"><img src="{{asset('images/loc.png')}}" style="width:20px" class="pr-1 pb-1">Elektrėnų g. 8A, Kaunas</div>
                        <div class="p-2"><img src="{{asset('images/tel.png')}}" style="width:20px" class="pr-1 pb-1">(8-634) 55552</div>
                        <div class="p-2"><img src="{{asset('images/mail.png')}}" style="width:20px" class="pr-1 pb-1">info@remapas.lt </div>

                </div>
                <div class="form-col-group">
                        <div class="header a-c">
                        {{ __('Remapas Kaune') }}
                        </div>

                        <div class="p-2"><img src="{{asset('images/loc.png')}}" style="width:20px" class="pr-1 pb-1">Elektrėnų g. 8A, Kaunas</div>
                        <div class="p-2"><img src="{{asset('images/tel.png')}}" style="width:20px" class="pr-1 pb-1">(8-634) 55552</div>
                        <div class="p-2"><img src="{{asset('images/mail.png')}}" style="width:20px" class="pr-1 pb-1">info@remapas.lt </div>
                        


                </div>

        </div>
    </div>
    
  </div>

@stop
