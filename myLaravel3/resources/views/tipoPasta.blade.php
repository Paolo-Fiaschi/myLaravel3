@extends('template')
@section('content')
    <h2>{{$titolo}}:</h2>
    <ul>
        @foreach ($tipoPasta as $card)

        <li>
            <a href="{{route('infoPasta')}}"><h2>{{$card['titolo']}}</h2></a>
        </li>
        @endforeach
    </ul>
@endsection
