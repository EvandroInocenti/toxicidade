@extends('admin.layouts.app')

@section('title', 'Listagem dos Pacientes')

@section('content')
<header class="space-y-4 p-5 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('pacientes.create') }}" class="hover:bg-blue-700 group flex focus:ring-4 focus:ring-blue-300 bg-blue-800 text-white font-medium py-1 px-2 border text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
    <form class="group relative" action="{{ route('pacientes.search') }}" method="post">
        @csrf
        <div class="flex flex-col">
            <div class="grid xl:grid-cols-2 xl:gap-1">
                <div class="relative z-0 mb-6 group">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Procurar pacientes" name="search"/>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <button type="submit" class="bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 rounded-lg text-white font-medium py-1 px-2 border text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
                </div>
            </div>
        </div>
    </form>
</header>

<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="p-4">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Id
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Nome
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    CPF
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Telefone
                                </th>
                                <th scope="col" class="p-4">
                                    <span class="sr-only">Ver</span>
                                </th>
                                <th scope="col" class="p-4">
                                    <span class="sr-only">Editar</span>
                                </th> <th scope="col" class="p-4">
                                    <span class="sr-only">Deletar</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($pacientes as $paciente)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->id }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $paciente->nome }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->CPF }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->email }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->telefone }}</td>
                                <th class="p-2 md:border md:border-grey-500 text-left md:table-cell" scope="col">
                                    <form action="{{ route('pacientes.show', $paciente->id) }}">
                                        <button class="bg-blue-800 hover:bg-blue-700 text-white font-medium py-1 px-2 border text-center border-blue-500 rounded">Ver</button>
                                    </form>
                                </th>
                                <th class="p-2 md:border md:border-grey-500 text-left md:table-cell" scope="col">
                                    <form action="{{ route('pacientes.edit', $paciente->id) }}">
                                        <button class="bg-blue-800 hover:bg-blue-700 text-white font-medium py-1 px-2 text-center border border-blue-500 rounded">Editar</button>
                                    </form>
                                </th>
                                <th class="p-2 md:border md:border-grey-500 text-left md:table-cell" scope="col">
                                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="bg-red-800 hover:bg-red-700 text-white font-medium py-1 px-2 text-center border border-red-500 rounded" type="submit">Delete</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
