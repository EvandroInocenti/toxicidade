@extends('admin.layouts.app')

@section('title', 'Listagem dos Pacientes')

@section('content')
<header class="space-y-4 p-5 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('pacientes.create') }}" class="hover:bg-blue-400 group flex items-center rounded-md bg-sky-600 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
            <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
                <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
            </svg>
            Novo
        </a>
        <hr>
        @if (session('message'))
            <div>
                {{ session('message')}}
            </div>
        @endif
    </div>
    <br>
    <div class="mx-auto columns-2 gap-4">
        <form class="group relative" action="{{ route('pacientes.search') }}" method="post">
            @csrf
            <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-blue-500" aria-hidden="true">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
            </svg>
                <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Pesquisar paciente" type="text" name="search"/>
                <button class="bg-sky-600 hover:bg-sky-700 rounded-lg h-9 w-32 text-white" type="submit">Filtrar</button>
        </form>
    </div>
</header>

<div class="p-5 mx-auto columns-1 ">
    <table class="table-auto bg-sky-100" >
        <thead>
        <tr class="bg-sky-300 text-left">
            <th class="w-8" >ID </th>
            <th class="w-80">Nome</th>
            <th class="w-32">CPF</th>
            <th class="w-80">Email</th>
            <th class="w-32">Telefone</th>
            <th class="w-24"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr class="text-left">
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nome }}</td>
                <td>{{ $paciente->CPF }}</td>
                <td>{{ $paciente->email }}</td>
                <td>{{ $paciente->telefone }}</td>
                <td>
                    <div>
                        <span class="inline-flex items-center justify-center p-2 bg-indigo-900 rounded-md shadow-lg">
                          <svg class="h-2 w-2 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                          <a href="{{ route('pacientes.show', $paciente->id) }}">Ver </a>
                        </span>

                        <span class="inline-flex items-center justify-center p-2 bg-indigo-900 rounded-md shadow-lg">
                            <svg class="h-2 w-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                            <a href="{{ route('pacientes.edit', $paciente->id) }}">Edit </a>
                          </span>
                      </div>
                </td>
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
