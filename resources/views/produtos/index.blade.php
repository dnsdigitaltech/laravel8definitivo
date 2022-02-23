@extends('layouts.admin-lte.app')
@section('title', 'Produtos')
@section('content')
    <a href="{{ route('produtos.inserir') }}" class="btn btn-primary btn-lg"><i class="fas fa-cart-plus"></i> Add Produtos</a>
    <div class="card shadown md-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTable dtr-inline collapsed" id="produtos" width="100">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->valor}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>
                                <a href="{{ route('produtos.descricao', [$produto->id]) }}" title="Detalhes do produto - {{$produto->nome}}"> <i class="fas fa-file-alt text-primary"></i></a>
                                <a href="{{ route('produtos.descricao', [$produto->id]) }}" title="Editar produto - {{$produto->nome}}"> <i class="fas fa-edit text-info"></i></a>
                                <a href="{{ route('produtos.descricao', [$produto->id]) }}" title="Deletar produto - {{$produto->nome}}"> <i class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--{{ $produtos->links() }}-->
@endsection
