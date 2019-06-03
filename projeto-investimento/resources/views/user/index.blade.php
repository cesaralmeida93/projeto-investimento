@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')
	@if(session('success'))
		<h3>{{ session('success')['messages'] }}</h3>
	@endif

	{!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
		@include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
		@include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => 'Telefone']])
		@include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => 'E-mail']])
		@include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => 'Senha']])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])

	{!! Form::close() !!}

	<table class="default-table">
		<thead>
			<tr>
				 <td>#</td>
				 <td>CPF</td>
				 <td>Nome</td>
				 <td>Telefone</td>
				 <td>Nascimento</td>
				 <td>E-mail</td>
				 <td>Status</td>
				 <td>Permissão</td>
				 <td>Menu</td>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				 <td>{{ $user->id }}</td>
				 <td>{{ $user->formatted_cpf }}</td>
				 <td>{{ $user->name }}</td>
				 <td>{{ $user->formatted_phone }}</td>
				 <td>{{ $user->formatted_birth }}</td>
				 <td>{{ $user->email }}</td>
				 <td>{{ $user->status }}</td>
				 <td>{{ $user->permission }}</td>
				 <td>
				 	{!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Remover') !!}
					{!! Form::close() !!}
					Remover
				 </td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection