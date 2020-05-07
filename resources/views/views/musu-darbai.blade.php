@extends('layouts.app')
@section('content')

<div class="phead">
    <div class="container">
<h1 class=" mt-2" style="font-weight:bold;">OUR TUNING PROJECTS</h1>

    </div>
</div>

<div class="container">

    


    <div class="ourwork">
        <div class="row">
        @if(count($objects)>0)
        @foreach($objects as $object)
           <div class="col">
                <div class="work-card">
                    <a href="{{route('project.show',['id' => $object->id])}}">
                        <img src="{{asset($object->image)}}">
                        <div class="body">
                            <span>{{$object->title}}</span>
                            <div  class="row justify-content-around m-0" >
                                
                                    <div class="data">
                                        <img src="{{asset('images/irankis.png')}}" class="">{{$object->power_before}}
                                    </div>
                                    <div class="data">
                                        <img src="{{asset('images/forma.png')}}">{{$object->power_after}}
                                    </div>
                                    <div class="data">
                                        <img src="{{asset('images/bakasE25.png')}}">2text
                                    </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        @endif
    </div>
</div>

@stop