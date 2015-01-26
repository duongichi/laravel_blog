<article>
    <header>
        <h1>
            {{$post->title}}
        </h1>
        <div>
            <span>{{explode(' ',$post->created_at)[0]}}</span>
        </div>
    </header>
    <div>
        <p>{{ $post->content }}</p>
    </div>
</article>