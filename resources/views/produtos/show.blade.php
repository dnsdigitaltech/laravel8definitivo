@extends('layouts.admin-lte.app')
@section('title', 'Página produto')
@section('content')

<div class="col-12 col-sm-12">
    <p>{{ $produto->descricao }}</p>
</div>

@endsection

