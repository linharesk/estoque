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
    	return view('listagem')->withProdutos($produtos);
    }

    public function mostra()
    {
    	$id = request()->route()->parameters['id'];
    	$detalhes = DB::table('produtos')->where('id', '=', $id)->get();

        if (!request()->is('id')) {
            return "Esse produto nao existe!!!";
        }else{
            return view('detalhes')->with('p', $detalhes[0]);
        }
    }
}
