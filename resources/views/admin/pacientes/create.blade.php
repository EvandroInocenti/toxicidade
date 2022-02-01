@extends('admin.layouts.app')

@section('title', 'Cadastro de pacientes')

@section('content')
    <h1> Cadastro de pacientes</h1>

    <form action="{{ route('pacientes.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.pacientes._partials.form')
        
    </form>
@endsection