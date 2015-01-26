@if(!empty($notFound))
<p>NO POST</p>
@else
@foreach($posts as $post)
	<article>
		<header>
			<h1>
				{{link_to_route('post.show',$post->title,$post->id)}}
			</h1>
			<div>
				<span>{{explode(' ',$post->created_at)[0]}}</span>
				<span>{{$post->comment_count}} comments </span>
			</div>
		</header>
		<div>
			<p>{{$post->read_more.' ...'}}</p>
			<span>{{link_to_route('post.show','READ MORE',$post->id)}}
		</div>
	</article>
@endforeach
{{$posts->links()}}
@endif
