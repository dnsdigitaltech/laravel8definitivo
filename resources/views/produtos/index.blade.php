@extends('layouts.admin-lte.site')
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
        <h3>Página dos Produtos</h3>
        @foreach($produtos as $produto)
        <p>{{$produto->nome}}</p>
        @endforeach

        {{ $produtos->links() }}
    </section>
</div>
@endsection
