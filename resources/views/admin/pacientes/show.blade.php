@extends('admin.layouts.app')

@section('title', 'Informações do paciente')

@section('content')
<h1>Informações do paciente</h1>
<ul>
    <li><strong>Nome: </strong> {{$paciente->nome}}</li>
    <li><strong>CPF: </strong>  {{$paciente->cpf}}</li>
    <li><strong>E-mail: </strong>  {{$paciente->email}}</li>
</ul>

<form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">

    <div class="flex space-x-4 mb-5 text-sm font-medium bg-sky-50 aspect-square">
        <div class="flex-auto flex space-x-4">
            <button class="inline-flex items-center px-4 border border-transparent bg-sky-600 hover:bg-sky-700 font-semibold rounded-lg h-8 w-32 text-white tracking-widest focus:outline-none focus:border-sky-900 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" type="submit">Excluir</button>
        </div>
      </div>
</form>
@endsection
