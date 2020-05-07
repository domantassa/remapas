<?php

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Session;
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
 Route::get('darbai','ProjectsController@index')->name('projects');




Route::get('lang/{locale}', function ($locale){
    Session::put('locale',$locale);
    return back();
})->name('lang');


    Route::post('dyler','FormsController@tapk_dyleriu')->name('form.dyler');
    /*
if(!='en' && !='lt')
{


 return 1;
}*/


    Route::get('/', function () {
   // return trans('Dirbame 24/7.');

        SEOTools::setTitle('Home');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/dyler'));
       // SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));

        return view('views.main');
    })->name('home');
Route::get('duk', function () {
        SEOTools::setTitle('DUK');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/duk'));
    //    SEOTools::setCanonical(url('/duk'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
      //  App::setLocale();
        return view('views.duk');
    })->name('duk');

    Route::get('dyler', function () {
        SEOTools::setTitle('Become a dealer');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/dyler'));
   //     SEOTools::setCanonical(url('/dyler'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.tapk-dyleriu');
    })->name('dyler');

    Route::get('prices', function () {
        SEOTools::setTitle('DUK');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/prices'));
     //   SEOTools::setCanonical(url('/prices'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
       // App::setLocale();
        return view('views.kainos');
    })->name('kainos');
    Route::get('tools', function () {
        SEOTools::setTitle('Tools');
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/tools'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.tools');
    })->name('tools');
    Route::get('contacts', function () {
        SEOTools::setTitle(trans('Contacts'));
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/contacts'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.kontaktai');
    })->name('kontaktai');
   /* Route::get('our-work', function () {
        SEOTools::setTitle(trans('Mūsų darbai'));
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/our-work'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        //App::setLocale();
        return view('views.musu-darbai');
    })->name('musu.darbai');
    */
    
    Route::get('our-work','ProjectsController@index')->name('musu.darbai');
    Route::get('our-work/{id}','ProjectsController@show')->name('project.show');
