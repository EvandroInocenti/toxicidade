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

<div class="p-5 mx-auto columns-2 gap-4">
    <form action="{{ route('pacientes.search') }}" method="post">
        @csrf
        <label class="relative block">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
            </span>
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Pesquisar paciente" type="text" name="search"/>
        </label>
            <button class="bg-sky-600 hover:bg-sky-700 rounded-lg h-9 w-32 text-white" type="submit">Filtrar</button>

    </form>
</div>

<div class="p-5 mx-auto columns-1">
    <table class="table-auto bg-sky-100" >
        <thead>
        <tr class="bg-sky-300 text-left">
            <th class="w-8" >ID </th>
            <th class="w-80">Nome</th>
            <th class="w-32">CPF</th>
            <th class="w-80">Email</th>
            <th class="w-32">Telefone</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr class="text-left">
                <td >{{ $paciente->id }}</td>
                <td >{{ $paciente->nome }}</td>
                <td >{{ $paciente->CPF }}</td>
                <td >{{ $paciente->email }}</td>
                <td >{{ $paciente->telefone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<hr>
    @if (isset($filters))
        {{ $pacientes->appends()->links() }}
    @else
        {{ $pacientes->links() }}
    @endif
@endsection
