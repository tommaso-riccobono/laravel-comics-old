@extends('layouts.default')

{{-- Section sintassi per contenuto più o meno lungo --}}
{{-- @section('pageTitle')
Home | La Molisana
@endsection --}}

{{-- Section con sintassi per contenuto molto breve. Solitamente una sola riga --}}
@section('pageTitle', 'Home')

@section('content')
@include("partials.jumbotronBox")
  
@include("partials.immaginiBox")

@include('partials.headerMain')
@endsection