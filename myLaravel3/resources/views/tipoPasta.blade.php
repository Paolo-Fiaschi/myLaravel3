@extends('template')
@section('content')
    <h2>{{$titolo}}:</h2>
    <ul>
        @foreach ($tipoPasta as $card)
        <h2><li>
            <a href="{{route('infoPasta', $card['id'])}}">{{$card['titolo']}}</a>
        </li></h2>
        @endforeach
    </ul>
@endsection
