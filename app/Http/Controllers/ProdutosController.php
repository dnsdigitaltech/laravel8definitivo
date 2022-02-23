<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produto = Produto::all();
        return $produto;
        return view('produtos.index');
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($nome, $valor = null){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
        /*if($valor){
            return "O nome do produto é $nome, e seu valor é $valor";
        }else{
            return "O nome do produto é $nome";
        }*/

    }
}
