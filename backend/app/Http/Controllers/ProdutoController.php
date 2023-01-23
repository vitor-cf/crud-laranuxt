<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdutoController extends Controller
{
    // function mostra todos produtos do banco
    public function index() {
       return $produto = Produto::orderBy('id','desc')->get();

    }
    // function show
    public function show(Produto $produto) {
        return response()->json($produto);
    }

    // function cria produto
    public function store(Request $request) {
        $produto = Produto::create($request->all());
        return response()->json($produto);
    }

    // function deleta produto
    public function destroy($id) {
        Produto::findOrFail($id)->delete();
        return 'Produto deletado com sucesso';
    }

    // function altera produto já existente
    public function update(Request $request, $id) {
        Produto::findOrFail($id)->update($request->all());
        return 'Produto alterado com sucesso';
    }

}
