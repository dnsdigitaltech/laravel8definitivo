@extends('layouts.admin-lte.app')
@section('title', 'Página produto')
@section('content')

<div class="col-12 col-sm-12">
    <h3>{{ $produto->nome }} - Valor: R$ {{ number_format($produto->valor, 2, ',', '.')}}</h3>
    <p>{{ $produto->descricao }}</p>
    <hr>
    <p>{{ $produto->descricao_longa }}</p>
    <a href="{{ route('produtos') }}" class="btn btn-primary btn-lg">Ver Produtos</a>

</div>

@endsection

