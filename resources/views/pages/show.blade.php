@extends('layouts.main-layout')
@section('content')

<h1>{{ $serie -> title}} - {{ $serie -> author}} <br> {{ $serie -> release_date}} <br> rating: {{ $serie -> rating ?? 'no rating'}} </h1>
    
@endsection