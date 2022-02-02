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
    <form action="{{ route('store')}}" method="POST">

        @method('POST')
        @csrf

        <input type="text"  name="title"placeholder="aggiungi titolo">
        <input type="text"  name="author"placeholder="aggiungi autore">
        <input type="date" name="release_date">
        <input type="submit" name='submit' value="CREATE">
    </form>
@endsection