
@extends('layouts.app')
@section('content')
<div class="phead">
    <div class="container">
<h1 class=" mt-2" style="font-weight:bold;"> {{$object->title}}</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
       
        <div>
    </div>
    <div class="row">
        <div class="col-6">
            <p>
            {{$object->modifications}}
            </p>
            
        </div>
        <div class="col-6">
            <img src="{{asset($object->image)}}">
        </div>
    </div>
</div>




@stop
