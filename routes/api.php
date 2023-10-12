<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PacotesController;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/budget', [CalculatorController::class, 'budget']);
Route::post('/economy', [CalculatorController::class, 'economy']);
Route::post('/investment', [CalculatorController::class, 'investment']);

Route::resource('pacotes', PacotesController::class);
Route::resource('clientes', ClientesController::class);

