<?php

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;
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

Route::redirect('/','/lt');
Route::redirect('','/lt');
Route::redirect('/dyler','/lt/dyler');
Route::redirect('/kainos','/lt/kainos');
Route::redirect('/tools','/lt/tools');

Route::group(['prefix' => '{locale}'],function($prefix)
{
    Route::post('dyler','FormsController@tapk_dyleriu')->name('form.dyler');
    /*
if($prefix!='en' && $prefix!='lt')
{


 return 1;
}*/
    Route::get('/', function ($prefix) {
   // return trans('Dirbame 24/7.');
        SEOTools::setTitle('Home');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/dyler'));
       // SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));

        return view('views.main');
    })->name('home');
Route::get('duk', function ($prefix) {
        SEOTools::setTitle('DUK');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/duk'));
    //    SEOTools::setCanonical(url('/duk'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
      //  App::setLocale();
        return view('views.duk');
    })->name('duk');

    Route::get('dyler', function ($prefix) {
        SEOTools::setTitle('Become a dealer');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/dyler'));
   //     SEOTools::setCanonical(url('/dyler'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.tapk-dyleriu');
    })->name('dyler');

    Route::get('prices', function ($prefix) {
        SEOTools::setTitle('DUK');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/prices'));
     //   SEOTools::setCanonical(url('/prices'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
       // App::setLocale();
        return view('views.kainos');
    })->name('kainos');
    Route::get('tools', function ($prefix) {
        SEOTools::setTitle('Tools');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/tools'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.tools');
    })->name('tools');
    Route::get('contacts', function ($prefix) {
        SEOTools::setTitle(trans('Contacts'));
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url($prefix.'/contacts'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.kontaktai');
    })->name('kontaktai');

});