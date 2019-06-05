@extends('templates.master')

@section('conteudo-view')
	{!! Form::open(['route' => ['institution.product.store', $institution->id], 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['label' => 'Nome do Produto', 'input' => 'name'])
		@include('templates.formulario.input', ['label' => 'Descrição', 'input' => 'description'])
		@include('templates.formulario.input', ['label' => 'Indexador', 'input' => 'index'])
		@include('templates.formulario.input', ['label' => 'Taxa de Juros', 'input' => 'interest_rate'])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}

	<table class="default-table">
		<thead>
			<th>#</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Indexador</th>
			<th>Taxa</th>
			<th>Opções</th>
		</thead>
		<tbody>
			@forelse($institution->products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->index }}</td>
				<td>{{ $product->interest_rate }}</td>
				<td>
					{!! Form::open(['route' => ['institution.product.destroy', $institution->id, $product->id], 'method' => 'DELETE']) !!}
						{!! Form::submit("Remover") !!}
					{!! Form::close() !!}
					<a href="">Editar</a>
				</td>
			</tr>
			@empty
			<tr>
				<td>Nada Cadastrado</td>
			</tr>
			@endforelse
		</tbody>
	</table>

@endsection