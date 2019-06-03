 @extends('templates.master')


@section('conteudo-view')

	@if(session('success'))
		<h3>{{ session('success')['messages'] }}</h3>
	@endif

	{!! Form::open(['route' => 'institution.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
		@include('templates.formulario.input', ['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
		@include('templates.formulario.submit', ['input' => 'Cadastrar'])
	{!! Form::close() !!}


<table class="default-table">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome da Instituição</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		@foreach($institutions as $inst)
		<tr>
			<th>{{ $inst->id }}</th>
			<th>{{ $inst->name }}</th>
			<th>
				{!! Form::open(['route' => ['institution.destroy', $inst->id], 'method' => 'delete']) !!}
				{!! Form::submit("Remover") !!}
				{!! Form::close() !!}
				<a href="{{ route('institution.show', $inst->id) }}">Detalhes</a>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection