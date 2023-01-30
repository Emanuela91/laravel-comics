@extends('layouts.main-layout')

{{-- segnaposto, titolo pagina --}}
@section('head')
<title>Laravel-Comics</title>
@endsection

{{-- segnaposto, contenuto della pagina --}}
@section('content')


<img id="jumbotron" src="{{Vite::asset('resources/img/jumbotron.jpg')}} " alt="" srcset="">
@endsection