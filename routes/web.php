<?php

use App\Http\Controllers\ComandanteController;
use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layouts.layout');
});

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/backup', function () {
    return view('backup.index');
});

// Route::get('/comandante', [App\Http\Controllers\ComandanteController::class, 'index']);

Route::get('docs/insignia', function () {
    return view('insignia.index');
})->name('insignia');

Route::get('docs/brasao', function () {
    return view('brasao.index');
})->name('brasao');

Route::get('docs/bracal', function () {
    return view('bracal.index');
})->name('bracal');

Route::get('docs/cancao', function () {
    return view('cancao.index');
})->name('cancao');

Route::get('docs/challenge-coin', function () {
    return view('challenge-coin.index');
})->name('challenge-coin');

Route::get('docs/k9bauru', function () {
    return view('k9bauru.index');
})->name('k9bauru');

Route::get('docs/k9marilia', function () {
    return view('k9marilia.index');
})->name('k9marilia');

Route::get('docs/k9jau', function () {
    return view('k9jau.index');
})->name('k9jau');

Route::get('docs/k9santacruz', function () {
    return view('k9santacruz.index');
})->name('k9santacruz');

Route::get('docs/hipobauru', function () {
    return view('hipobauru.index');
})->name('hipobauru');

Route::get('docs/hipomarilia', function () {
    return view('hipomarilia.index');
})->name('hipomarilia');

Route::get('/galeria-de-comandantes', function () {
    return view('pages.galeriadecomandantes');
})->name('galeria.comandantes');

Route::get('/galeria-de-herois', function () {
    return view('pages.galeriadeherois');
})->name('galeria.herois');

Route::get('/policial-do-mes/{mes}/{ano}', function ($mes, $ano) {
    $policial = \App\Models\PolicialMes::where('mes', $mes)->where('ano', $ano)->firstOrFail();
    return view('policialdomes.show', compact('policial'));
})->name('policial.mes.show');

Route::get('/ocorrencia-de-destaque/{mes}/{ano}', function ($mes, $ano) {
    $ocorrencia = \App\Models\OcorrenciaDestaque::where('mes', $mes)->where('ano', $ano)->firstOrFail();
    return view('ocorrenciadedestaque.show', compact('ocorrencia'));
})->name('ocorrencia.destaque.show');

// Route::get('/policial-do-mes/jan26', function () {
//     return view('policialdomes.jan26');
// })->name('policial.mesjan26');

// Route::get('/ocorrencia-de-destaque/jan26', function () {
//     return view('ocorrenciadedestaque.jan26');
// })->name('ocorrenciadedestaque.ocorrenciajan26');

