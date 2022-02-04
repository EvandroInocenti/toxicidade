@extends('admin.layouts.app')

@section('title', 'Cadastro de pacientes')

@section('content')
    <h1 class="text-center text-3x1 uppercase font black my-4"> Cadastro de pacientes</h1>

    <div class="bg-white sm:w-8/12 md:w-1/2 mx-auto w-full sm:max-w-md shadow-md overflow-hidden sm:rounded-lg">
        <form action="{{ route('pacientes.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.pacientes._partials.form')
        </form>
    </div>
@endsection
