@extends('layouts.admin-lte.app')
@section('title', 'Produtos')
@section('content')
<div class="wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Página dos Produtos</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">


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
                                <td><i class="fas fa-file-alt"></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--{{ $produtos->links() }}-->
    </section>
</div>
@endsection
