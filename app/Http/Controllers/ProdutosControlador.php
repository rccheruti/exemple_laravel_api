<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosControlador extends Controller
{
    public function index()
    {
        return Produtos::all()->toJson();
    }

    public function store(Request $request)
    {
        $prods = new Produtos
        ([
            'nome' => $request->nome,
            'categorias_id' => $request->categorias_id,
            'estoque' => $request->estoque,
            'valor' => $request->valor,
        ]);

        $prods->save();

        return response()->json
        ([
            'res' => 'Produto cadastrado com sucesso!'
        ], 201);


    }


}
