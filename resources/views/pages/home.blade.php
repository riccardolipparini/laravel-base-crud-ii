@extends('layouts.main-layout')
@section('content')
    <h1>Lista serie tv:</h1>

    <a href="{{ route('create')}}">
        <h2>Aggiungi serie tv</h2>
    </a>

    <ul>
        @foreach ($series as $serie)
        
            <li>
                <a href="{{ route('show', $serie -> id)}}"><p>{{ $serie -> title}} - {{ $serie -> author}}</p></a>
                <a href="{{ route('edit', $serie -> id)}}">EDIT</a>
                <a href="{{ route('delete', $serie -> id)}}">DELETE</a>
            </li>
        
        
            
        @endforeach
    </ul>
@endsection