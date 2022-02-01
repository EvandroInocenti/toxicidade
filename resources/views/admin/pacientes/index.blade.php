@extends('admin.layouts.app')

@section('title', 'Listagem dos Pacientes')

@section('content')
<a href="{{ route('pacientes.create') }}" >Novo paciente</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message')}}
    </div>
@endif

<form action="{{ route('pacientes.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<h4>Pacientes <h4>

    @foreach ($pacientes as $paciente)
    <p>
        {{ $paciente->nome }}
        [
            <a href="{{ route('pacientes.show', $paciente->id) }}">Ver </a> |
            <a href="{{ route('pacientes.edit', $paciente->id) }}">Edit </a>
        ]
    </p>
@endforeach

<hr>
    @if (isset($filters))
        {{ $pacientes->appends()->links() }}
    @else
        {{ $pacientes->links() }}
    @endif
@endsection