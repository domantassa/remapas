<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','/en');
Route::redirect('','/en');
Route::redirect('/dyler','/en/dyler');
Route::redirect('/kainos','/en/kainos');
Route::redirect('/tools','/en/tools');

Route::group(['prefix' => '{locale}'],function($prefix)
{
    /*
if($prefix!='en' && $prefix!='lt')
{


 return 1;
}*/
    Route::get('/', function () {
        
        return view('views.main');
    })->name('home');

    Route::get('duk', function () {
      //  App::setLocale();
        return view('views.duk');
    })->name('duk');

    Route::get('dyler', function () {
        //App::setLocale();
        return view('homepage');
    })->name('dyler');

    Route::get('kainos', function () {
       // App::setLocale();
        return view('views.kainos');
    })->name('kainos');
    Route::get('tools', function () {
        //App::setLocale();
        return view('views.tools');
    })->name('tools');

});