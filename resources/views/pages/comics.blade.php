@extends('layouts.main-layout')

{{-- segnaposto, titolo pagina --}}
@section('head')
<title>Laravel-Comics</title>
@endsection

{{-- segnaposto, contenuto della pagina --}}
@section('content')

<div class="container-fluid">
    <div class="container d-flex">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}} " alt="" srcset="">
        <nav id="navbar" class="align-self-center">
            <ul class="d-flex text-align-center">
                <li>CHARACTERS</li>
                <li>COMICS</li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOPS</li>
            </ul>
        </nav>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
          </div>

    </div>

</div>
<img id="jumbotron" src="{{Vite::asset('resources/img/jumbotron.jpg')}} " alt="" srcset="">
@endsection