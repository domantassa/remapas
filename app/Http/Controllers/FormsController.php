<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //

    public function tapk_dyleriu(Request $request){
        
        //dd($request);
        $inputs=$request->all();
        $html='<table><tr><th>input</th><th>value</th></tr>';
        $keys=array_keys($inputs);
        
        foreach($keys as $key)
        {
         $html=$html.'<tr><td>'.$key.'</td> <td> '.$inputs[$key].'</td></tr>';   
        }
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
