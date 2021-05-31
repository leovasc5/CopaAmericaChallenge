<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CACController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('convidado/grupos', function () {
    return view('/convidado/grupos');
});

// Route::get('jogo/grupos', function () {
//     return view('/jogo/grupos');
// });

Route::get('/jogo/grupos', [CACController::class, 'valida_entrada_grupos']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::post('/convidado/quartas', [CACController::class, 'valida_grupos_convidado']);
Route::post('/convidado/semi', [CACController::class, 'valida_quartas_convidado']);
Route::post('/convidado/terceiro', [CACController::class, 'valida_semi_convidado']);
Route::post('/convidado/final', [CACController::class, 'valida_terceiro_convidado']);
Route::post('/convidado/premiacao', [CACController::class, 'valida_premiacao_convidado']);

Route::post('/jogo/quartas', [CACController::class, 'valida_grupos_jogo'])->middleware('auth');
Route::post('/jogo/semi', [CACController::class, 'valida_quartas_jogo'])->middleware('auth');
Route::post('/jogo/terceiro', [CACController::class, 'valida_semi_jogo'])->middleware('auth');
Route::post('/jogo/final', [CACController::class, 'valida_terceiro_jogo'])->middleware('auth');
Route::post('/jogo/premiacao', [CACController::class, 'valida_premiacao_jogo'])->middleware('auth');

Route::delete('/excluir', [CACController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [CACController::class, 'dashboard'])->middleware('auth');