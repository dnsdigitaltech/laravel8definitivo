@extends('layouts.admin-lte.app')
@section('title', 'Produtos')
@section('content')
    @if(!isset($id))
        {{ $id = "" }}
    @endif
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
                                <a href="{{ route('produtos.edit', $produto) }}" title="Editar produto - {{$produto->nome}}"> <i class="fas fa-edit text-info"></i></a>
                                <a href="{{ route('produtos.modal', [$produto->id,$produto->nome]) }}" title="Deletar produto - {{$produto->nome}}"> <i class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- $produtos->links() --}}

    @if (@$id != "")
    <script type="text/javascript">
        $().ready(function() {
            $('#exampleModal').modal();
        });
    </script>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar Registro - {{ @$nomeDelete }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja relamente excluir este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('produtos.delete', $id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
