<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $data['produtos'] = Produto::orderBy('id','desc')->paginate();
        //$data['produtos'] = Produto::get();
        $data['titlePage'] = "Todos os produtos";
        $data['icoPage'] = 'fas fa-th-list';
        return view('produtos.index', $data);
    }

    public function create(){
        $data['titlePage'] = "Inserir produto";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.create', $data);
    }

    public function insert(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->descricao_longa = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function show($id){
        $data['produto'] = Produto::find($id);
        $data['title'] =
        $data['titlePage'] = "O nome do produto é {$data['produto']->nome}";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.show', $data);
    }

    public function edit(Produto $produto){
        $data['produto'] = $produto;
        $data['titlePage'] = "Editar o produto: {$data['produto']->nome}";
        $data['icoPage'] = 'fas fa-edit';
        return view('produtos.edit', $data);
    }

    public function editar(Request $request, Produto $produto){
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->descricao_longa = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function delete(Produto $produto){
        $produto->delete();
        return redirect()->route('produtos');
    }

    public function modal($id, $nome){
        $data['produtos'] = Produto::orderBy('id','desc')->paginate();
        $data['titlePage'] = "Todos os produtos";
        $data['icoPage'] = 'fas fa-th-list';
        $data['id'] = $id;
        $data['nomeDelete'] = $nome;
        return view('produtos.index', $data);
    }
}
