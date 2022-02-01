@extends('admin.layouts.app')

@section('title', "Editar o paciente {$paciente->nome}")

@section('content')
<h1><strong> {{ $paciente->nome }} </strong></h1>

<form action="{{ route('pacientes.update', $paciente->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('admin.pacientes._partials.form')
</form>
@endsection
