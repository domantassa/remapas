@extends('layouts.app')


@section('content')

<style>

.titleCenter {
    margin-top: 2em;
    display: flex;
    justify-content: center;
}

.itemContainer {
    display: flex;
    justify-content: flex-start;
    margin: auto;
    justify-content: center;
    height: 800px;
    flex-wrap: wrap;
    margin: 4em;
    margin-top: 2em;
}

.photo-container {
    margin: 3em;
}

.PhotoItself {
    border-radius: 10px;
    width: 300px;
    height: 300px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    object-fit: cover;
    object-position: 50% 50%;
    transition: transform .5s ease;
}

.photo-container {
    width: 300px;
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
    position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0, 0, 0, 0.5);
  
}

.photo-container:hover .overlay {
  opacity: 1;
  cursor: pointer;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 90%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}



.photo-container:hover .PhotoItself {
    border-radius: 10px;
    width: 300px;
    height: 300px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    object-fit: cover;
    object-position: 50% 50%;
    transition: transform 0.5s ease-out;
    transform: scale(1.4) rotate(5deg);
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 0rem;
    border: 0;
}


}

</style>


<div class="titleCenter"><h1 class="title bold Dmargin">@lang('Mūsų darbai')</h1></div>

    <div class="row">
        <div class="itemContainer">
        <a href="{{asset('images/ourwork/AUDIA7.png')}}" data-toggle="lightbox" data-gallery="example-gallery" >
            <div class="photo-container">
                <img id="myImg" class=" PhotoItself" src="{{asset('images/ourwork/AUDIA7.png')}}"/>
                <div class="overlay">
                    <div class="text">AUDIA7</div>
                </div>
            </div></a>
            <a href="{{asset('images/ourwork/AUDIRS7.png')}}" data-toggle="lightbox" data-gallery="example-gallery" >
            <div class="photo-container">
                <img class=" PhotoItself" src="{{asset('images/ourwork/AUDIRS7.png')}}"/>
                <div class="overlay">
                    <div class="text">AUDIRS7</div>
                </div>
            </div>
            </a>
            <div class="photo-container">
                <img class=" PhotoItself" src="{{asset('images/ourwork/AUDIS6.png')}}"/>
                <div class="overlay">
                    <div class="text">AUDIS6</div>
                </div>
            </div>
            <div class="photo-container">
                <img class=" grow-in PhotoItself" data-src="{{asset('images/ourwork/BMW428i.png')}}"/>
                <div class="overlay">
                    <div class="text">BMW428i</div>
                </div>
            </div>
            <div class="photo-container">
                <img class=" grow-in PhotoItself" data-src="{{asset('images/ourwork/HONDACIVIC.png')}}"/>
                <div class="overlay">
                    <div class="text">HONDACIVIC</div>
                </div>
            </div>
            <div class="photo-container">
                <img class=" grow-in PhotoItself" data-src="{{asset('images/ourwork/VWGOLFR.png')}}"/>
                <div class="overlay">
                    <div class="text">VWGOLFR</div>
                </div>
            </div>
            <div class="photo-container">
                <img class=" grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class=" grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
            <div class="photo-container">
                <img class="grow-in PhotoItself" data-src="https://via.placeholder.com/300"/>
            </div>
        </div>

</div>

@stop 