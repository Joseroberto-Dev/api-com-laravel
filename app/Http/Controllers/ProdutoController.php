<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
        ]);

        return Produto::create($request->all());
    }

    public function show($id)
    {
         return Produto::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all()); // Atualiza e retorna
        return $produto;
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete(); // Deleta o produto
        return response()->json(['mensagem' => 'Produto deletado com sucesso']);
    }
}
