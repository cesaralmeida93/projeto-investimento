@extends('templates.master')

@section('conteudo-view')

{!! Form::open(['route' => 'group.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['label' => "Nome do Grupo", 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
		@include('templates.formulario.input', ['label' => "User", 'input' => 'user_id', 'attributes' => ['placeholder' => 'User']])
		@include('templates.formulario.input', ['label' => "Instituição", 'input' => 'institution_id', 'attributes' => ['placeholder' => 'Instituição']])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}



@endsection