@extends('template')
@section('content')
    <ul>
        <h2><li>
            <a href="{{route('lunga')}}">Lunga:</a>
        </li></h2>
        <h2><li>
            <a href="{{route('corta')}}">Corta:</a>
        </li></h2>
        <h2><li>
            <a href="{{route('cortissima')}}">Cortissima:</a>
        </li></h2>
    </ul>
@endsection
