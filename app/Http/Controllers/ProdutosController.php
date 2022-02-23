<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($id){
        $data['produto'] = Produto::find($id);
        $data['titlePage'] = "O nome do produto é {$data['produto']->nome}";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.show', $data);
    }
}
