@extends('templates.master')


@section('conteudo-view')

	{!! Form::open(['route' => 'institution.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.select', ['label' => "Grupo", 'select' => 'group_id', 'data' => $group_list ?? [], 'attributes' => ['placeholder' => 'Grupo']])
		@include('templates.formulario.select', ['label' => "Produto", 'select' => 'product_id', 'data' => $product_list ?? [], 'attributes' => ['placeholder' => 'Produto']])
		@include('templates.formulario.input', ['label' => 'Valor', 'input' => 'name', 'attributes' => ['placeholder' => 'Valor']])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}


@endsection	