<table class="default-table">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome do Grupo</th>
			<th>Instituição</th>
			<th>Nome do Responsável</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		@foreach($group_list as $group)
		<tr>
			<td>{{ $group->id }}</td>
			<td>{{ $group->name }}</td>
			<td>{{ $group->institution->name }}</td>
			<td>{{ $group->owner->name }}</td>
			<td>
			 	{!! Form::open(['route' => ['group.destroy', $group->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('Remover') !!}
				{!! Form::close() !!}
				<a href="{{ route('group.show', $group->id) }}">Detalhes</a>
				<a href="{{ route('group.edit', $group->id) }}">Editar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>