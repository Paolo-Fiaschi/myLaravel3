<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
})->name('home');
Route::get('/lunga', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'lunga')-> map(function($item, $key){
        $item['id']= $key;
        return $item;
    });

    $titolo = "Lunga";

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('lunga');
Route::get('/corta', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'corta')-> map(function($item, $key){
        $item['id']= $key;
        return $item;
    });

    $titolo = "Corta";

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('corta');
Route::get('/cortissima', function () {
    $cards = config('pasta');
    $collection = collect($cards);
    $tipoPasta = [];
    $tipoPasta = $collection -> where('tipo', 'cortissima')-> map(function($item, $key){
        $item['id']= $key;
        return $item;
    });
    $titolo = "Cortissima";

    // -> map(function($item, $key){
    //     $item['id']= $key;
    // });

    return view('tipoPasta', compact('cards', 'tipoPasta', 'titolo'));
})->name('cortissima');
Route::get('/infoPasta/{id}', function ($id) {

    $cards = config('pasta');
    $collection = collect($cards);
    $card = $collection -> map(function($item, $key){
        $item['id']= $key;
        return $item;
    })-> where('id', $id)->first();
;
    $titolo = "dettagli";


    return view('infoPasta', compact('cards', 'card', 'titolo'));
})->name('infoPasta');
