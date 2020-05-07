<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Project;
use Storage;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $objects = Project::all();
        SEOTools::setTitle(trans('Mūsų darbai'));
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/our-work'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        
        return view('views.musu-darbai')->with('objects',$objects);
    }
    public function show($id)
    {
        $object=Project::find($id);
        SEOTools::setTitle(trans('Mūsų darbai'));
        SEOTools::setDescription(trans('Individualus, saugus ir patikimas automobilių valdymo blokų modifikavimas.'));
        SEOTools::opengraph()->setUrl(url('/our-work'));
     //   SEOTools::setCanonical(url('/tools'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@remapas.lt');
        SEOTools::jsonLd()->addImage(asset('images/icon2.png'));
        
        return view('views.project.show')->with('object',$object);

    }
}
