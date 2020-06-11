<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
})->name('home');
Route::get('/lunga', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'lunga');

    $titolo = "Lunga";
    // -> map(function($item, $key){
    //     $item['id']= $key;
    // });

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('lunga');
Route::get('/corta', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'corta');
    $titolo = "Corta";

    // -> map(function($item, $key){
    //     $item['id']= $key;
    // });

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('corta');
Route::get('/cortissima', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'cortissima');
    $titolo = "Cortissima";

    // -> map(function($item, $key){
    //     $item['id']= $key;
    // });

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('cortissima');
Route::get('/infoPasta', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'lunga') -> map(function($item, $key){
        $item['id']= $key;
    });
;
    $titolo = "lunga";


    return view('infoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('infoPasta');
