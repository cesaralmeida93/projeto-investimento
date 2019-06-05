@extends('templates.master')

@section('conteudo-view')
{!! Form::model($group, ['route' => ['group.update', $group->id], 'method' => 'put', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['label' => "Nome do Grupo", 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
		@include('templates.formulario.select', ['label' => "User", 'select' => 'user_id', 'data' => $user_list, 'attributes' => ['placeholder' => 'User']])
		@include('templates.formulario.select', ['label' => "Instituição", 'select' => 'institution_id', 'data' => $institution_list, 'attributes' => ['placeholder' => 'Instituição']])
		@include('templates.formulario.submit', ['input' => 'Atualizar'])
{!! Form::close() !!}
@endsection