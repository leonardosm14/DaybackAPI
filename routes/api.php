<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CarregadorController;
use Illuminate\Support\Facades\Route;

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

Route::get('test', function(){
    Return 'Test API';
});

Route::post('cadastrarproduto', [CarregadorController::class, 'add']);
Route::put('editarproduto', [CarregadorController::class, 'edit']);
Route::delete('removerproduto', [CarregadorController::class, 'delete']);