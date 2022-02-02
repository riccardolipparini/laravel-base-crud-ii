@extends('layouts.main-layout')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update', $serie -> id)}}" method="POST">

        @method('POST')
        @csrf

        <input type="text"  name="title"placeholder="aggiungi titolo" value="{{ $serie -> title}}">
        <input type="text"  name="author"placeholder="aggiungi autore" value="{{ $serie -> author}}">
        <input type="date" name="release_date" value="{{ $serie -> release_date}}">
        <input type="submit" name='submit' value="EDIT">
    </form>
@endsection