<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //

    public function tapk_dyleriu(Request $request){
        
        //dd($request);
        $inputs=$request->all();
        $html='<table style="
        margin-bottom: 1rem;
        color: #212529;"><thead style="color: #fff;
        background-color: #343a40;
        border-color: #454d55;"><tr><th style="padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;">input</th><th style="padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;">value</th></tr></thead><tbody>';
        $keys=array_keys($inputs);
        
        foreach($keys as $key)
        {
            if($key != "_token")
            {
             $html=$html.'<tr><td style="padding: .75rem;
             vertical-align: top;
             border-top: 1px solid #dee2e6;">'.$key.'</td> <td style="padding: .75rem;
             vertical-align: top;
             border-top: 1px solid #dee2e6;"> '.$inputs[$key].'</td></tr>';   
            }
        }
        $html=$html.'</tbody></table>';
        //dd($html);
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@remapas.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

        mail ("deividassabaliauskas@gmail.com", "Remapas forma" , $html ,$headers); 
        return back();
    }
}
