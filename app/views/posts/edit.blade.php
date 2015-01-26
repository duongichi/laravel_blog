<h2>Edit Post</h2>
<hr>
{{ Form::open(['route'=>['post.update',$post->id]]) }}
<div>
    <div>
        {{ Form::label('title','Post Title:') }}
        {{ Form::text('title',Input::old('title',$post->title)) }}
    </div>
</div>
<div>
    <div>
        {{ Form::label('content','Content:') }}
        {{ Form::textarea('content',Input::old('content',$post->content),['rows'=>5]) }}
    </div>
</div>
@if($errors->has())
@foreach($errors->all() as $error)
<div>
    {{$error}}
    <a href="#">&times;</a>
</div>
@endforeach
@endif
{{ Form::submit('Update',['class'=>'button tiny radius']) }}
{{ Form::close() }}
