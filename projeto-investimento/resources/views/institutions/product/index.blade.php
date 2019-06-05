@extends('templates.master')

@section('conteudo-view')
	{!! Form::open(['route' => ['institution.product.store', $institution->id], 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['label' => 'Nome do Produto', 'input' => 'name'])
		@include('templates.formulario.input', ['label' => 'Descrição', 'input' => 'description'])
		@include('templates.formulario.input', ['label' => 'Indexador', 'input' => 'index'])
		@include('templates.formulario.input', ['label' => 'Taxa de Juros', 'input' => 'interest_rate'])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}
@endsection