<a href="{{ route('posts.create') }}" >criar novo post</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message')}}
    </div>
@endif

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<h4>Posts <h4>

    @foreach ($posts as $post)
    <p>
        {{ $post->title }}
        [
            <a href="{{ route('posts.show', $post->id) }}">Ver </a> |
            <a href="{{ route('posts.edit', $post->id) }}">Edit </a>
        ]
    </p>
@endforeach

<hr>
@if (isset($filters))
{{ $posts->appends()->links() }}
@else
{{ $posts->links() }}
@endif
