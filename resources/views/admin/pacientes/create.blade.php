@extends('admin.layouts.app')

@section('title', 'Cadastro de pacientes')

@section('content')
    <h1 class="text-center text-3x1 uppercase font black my-4"> Cadastro de pacientes</h1>

    <div class="w11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w5/12 mx-auto">
        <form action="{{ route('pacientes.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.pacientes._partials.form')
        </form>
    </div>
@endsection