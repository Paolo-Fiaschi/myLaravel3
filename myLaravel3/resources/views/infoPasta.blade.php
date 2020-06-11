@extends('template')
@section('content')
    <h2>{{$titolo}}:</h2>
    <ul>
        <div><li>
            <h2>{{ $card['titolo'] }}</h2>
            <img src="{{ $card['src'] }}" alt="">
            <h3>Cottura: </h3>
            <span>{{ $card['cottura'] }}</span>
            <h3>Peso: </h3>
            <span>{{ $card['peso'] }}</span>
            <h3>Descrizione: </h3>
            <p>{{ $card['descrizione'] }}</p>
        </li></div>

    </ul>
@endsection
