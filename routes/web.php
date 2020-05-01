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

Route::redirect('/','/en');
Route::redirect('','/en');
Route::redirect('/dyler','/en/dyler');
Route::redirect('/kainos','/en/kainos');
Route::redirect('/tools','/en/tools');

Route::group(['prefix' => '{locale}'],function($prefix)
{
    Route::post('dyler','FormsController@tapk_dyleriu')->name('form.dyler');
    /*
if($prefix!='en' && $prefix!='lt')
{


 return 1;
}*/
    Route::get('/', function ($prefix) {

        SEOTools::setTitle('Home');
        //SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl(url($prefix.'/dyler'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/logotipas.png'));

        return view('views.main');
    })->name('home');
Route::get('duk', function ($prefix) {
        SEOTools::setTitle('DUK');
        //SEOTools::setDescription('Dažni klausimai');
        SEOTools::opengraph()->setUrl(url($prefix.'/duk'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/logotipas.png'));
      //  App::setLocale();
        return view('views.duk');
    })->name('duk');

    Route::get('dyler', function ($prefix) {
        SEOTools::setTitle('Become a dealer');
        //SEOTools::setDescription('Tapk remapas.lt dyleriu');
        SEOTools::opengraph()->setUrl(url($prefix.'/dyler'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/logotipas.png'));
        //App::setLocale();
        return view('views.tapk-dyleriu');
    })->name('dyler');

    Route::get('prices', function ($prefix) {
        SEOTools::setTitle('DUK');
        //SEOTools::setDescription('Dažni klausimai');
        SEOTools::opengraph()->setUrl(url($prefix.'/prices'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/logotipas.png'));
       // App::setLocale();
        return view('views.kainos');
    })->name('kainos');
    Route::get('tools', function ($prefix) {
        SEOTools::setTitle('Tools');
        //SEOTools::setDescription('Dažni klausimai');
        SEOTools::opengraph()->setUrl(url($prefix.'/tools'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/logotipas.png'));
        //App::setLocale();
        return view('views.tools');
    })->name('tools');

});