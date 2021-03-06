@extends('admin.layouts.app')

@section('title', 'Detalhes do paciente')

@section('content')
<h1>detalhes do post</h1>

<ul>
    <li><strong>Título: </strong> {{$post->title}}</li>
    <li><strong>Conteúdo: </strong>  {{$post->content}}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">

    <div class="flex space-x-4 mb-5 text-sm font-medium bg-sky-50 aspect-square">
        <div class="flex-auto flex space-x-4">
          <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3"> Excluir</button>
        </div>
      </div>


</form>

@endsection
