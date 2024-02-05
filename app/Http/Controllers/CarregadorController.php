<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CarregadorController extends Controller
{
    public function create(){
        $produtos = Produto::all();
        return view('exibirproduto', ['produtos' => $produtos]);
}

// Para API:

    public function add(Request $request) {
        $produtos = new Produto();
        $produtos->tipo = $request->tipo;
        $produtos->hardware = $request->hardware;
        $produtos->tarifa = $request->tarifa;

        $produtos->save();
        return response()->json($produtos);
    }

    public function edit(Request $request) {
        $produto = Produto::find($request->id);
        $produto->tipo = $request->tipo;
        $produto->hardware = $request->hardware;
        $produto->tarifa = $request->tarifa;

        $produto->update();
        return response()->json($produto);
    }

    public function delete(Request $request) {
        $produto = Produto::findOrFail($request->id);
        $produto->delete();
        return response()->json('Produto Deletado!');
    }

}