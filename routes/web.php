<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Http\Controllers\CarregadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('cadastrarproduto');
});

Route::post('/CadastroCarregador', function(Request $request){
    Produto::create([
        'tipo' => $request->carregador,
        'hardware' => $request->hardwareid,
        'tarifa' => $request->tarifa
    ]);
    return view('cadastrorealizado');
});

//Route::get('/exibirproduto', 'CarregadorController@index');

Route::get('/exibirproduto', [CarregadorController::class, 'create']);

Route::get('/editarproduto/{id}', function($id) {
    $produto = Produto::find($id);
    return view('editarproduto', ['produto' => $produto]);
});

Route::post('/editarproduto/{id}', function(Request $request, $id) {
    $produto = Produto::find($id);
    $produto->update([
        'tipo' => $request->carregador,
        'hardware' => $request->hardwareid,
        'tarifa' => $request->tarifa
    ]);
    return view('cadastrorealizado');
});

Route::get('/excluirproduto/{id}', function($id){
    $produto = Produto::find($id);
    $produto->delete();
    return view('produtodeletado');
});