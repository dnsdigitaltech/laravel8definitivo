<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return "Voce entrou na raiz do projeto";
    }

    public function create(){
        return "Página de Inserir produto";
    }

    public function show($nome, $valor = null){
        if($valor){
            return "O nome do produto é $nome, e seu valor é $valor";
        }else{
            return "O nome do produto é $nome";
        }

    }
}
