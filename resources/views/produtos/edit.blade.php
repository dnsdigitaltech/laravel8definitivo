@extends('layouts.admin-lte.app')
@section('title', 'Adicionar Produto')
@section('content')

    <form method="POST" action="{{ route('produtos.insert') }}">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="text" name="estoque" class="form-control" id="estoque" placeholder="Estoque">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" class="form-control" id="valor" placeholder="Valor">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" rows="3" placeholder="Descrição"></textarea>
        </div>


        <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Adicionar</button>
    </form>

@endsection
