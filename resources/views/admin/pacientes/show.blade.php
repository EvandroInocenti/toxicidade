@extends('admin.layouts.app')

@section('title', 'Informações do paciente')

@section('content')
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
                                    <span class="sr-only">Excluir</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->id }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $paciente->nome }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->CPF }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->email }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $paciente->telefone }}</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="bg-red-800 hover:bg-red-700 text-white font-medium py-1 px-2 text-center border border-red-500 rounded" type="submit">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div class="flex space-x-4 mb-5 text-sm font-medium bg-sky-50 aspect-square">
        <div class="flex-auto flex space-x-4">
            <button class="inline-flex items-center px-4 border border-transparent bg-sky-800 hover:bg-sky-700 font-semibold rounded-lg h-8 w-32 text-white tracking-widest focus:outline-none focus:border-sky-900 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" type="submit">Excluir</button>
        </div>
    </div>
</form>
@endsection
