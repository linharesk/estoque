<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    //
    public function lista()
    {
    	$produtos = DB::table('produtos')->select()->get();
    	return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra(Request $request)
    {
    	$id = $request->input("id", '0');
    	$detalhes = DB::table('produtos')->where('id', '=', $id)->get();

        if (!$request->has('id')) {
            return "Esse produto nao existe!!!";
        }

     	return view('produto.detalhes')->with('p', $detalhes[0]);
    }
}
