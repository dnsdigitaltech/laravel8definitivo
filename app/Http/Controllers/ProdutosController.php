<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $data['produtos'] = Produto::paginate();
        $data['titlePage'] = "Todos os produtos";
        $data['icoPage'] = 'fas fa-th-list';
        return view('produtos.index', $data);
    }

    public function create(){
        $data['titlePage'] = "Inserir produto";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.create', $data);
    }

    public function insert(){

    }

    public function show($id){
        $data['produto'] = Produto::find($id);
        $data['titlePage'] = "O nome do produto é {$data['produto']->nome}";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.show', $data);
    }
}
