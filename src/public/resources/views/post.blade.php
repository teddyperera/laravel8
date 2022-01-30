<article>
    <h1>
        {!! $post->title !!}
    </h1>
    <p>
        By <a href="#">Teddy Perera</a> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>
    <div>
        {!! $post->excerpt !!}
    </div>
</article>