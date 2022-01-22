<a href="{{ route('posts.create') }}" >criar novo post</a>
<hr>
<h4>Posts <h4>

@foreach ($posts as $post)
    <p>
        {{ $post->title }}
            [<a href="{{ route('posts.show', $post->id) }}">Ver</a>]
    </p>
@endforeach
