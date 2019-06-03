@extends('templates.master')

@section('conteudo-view')

<header>
	<h1>{{ $institution->name }}</h1>
</header>

@include('groups.list', ['group_list' => $institution->groups])

@endsection