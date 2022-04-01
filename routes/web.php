<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
	Indicacoes
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('indicacoes');
});

/* Route::get('cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar'); */

Route::get('cadastrar', Indicacoes::class)->middleware(['auth:sanctum', 'verified'])
    ->name('cadastrar');

// Route::post('/add_indicacao', [IndicacaoController::class,
// 'select_create'])->name('add_indicacao');


/* Route::get('indicacoes', function () {
    return view('indicacoes');
})->name('indicacoes'); */

Route::get('quemsomos', function () {
    return view('quemsomos');
})->name('quemsomos');



