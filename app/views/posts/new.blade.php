<h2>
    Add New Post
    <span>{{ HTML::link('admin/dash-board','Cancel',['class' => 'button tiny radius']) }}</span>
</h2>
<hr>
{{ Form::open(['route'=>['post.save']]) }}
<div>
    <div>
        {{ Form::label('title','Post Title:') }}
        {{ Form::text('title',Input::old('title')) }}
    </div>
</div>
<div>
    <div>
        {{ Form::label('content','Content:') }}
        {{ Form::textarea('content',Input::old('content'),['rows'=>5]) }}
    </div>
</div>
@if($errors->has())
@foreach($errors->all() as $error)
<div>
    {{$error}}
    <a href='#'>&times;</a>
</div>
@endforeach
@endif
{{ Form::submit('Save',['class'=>'button tiny radius']) }}
{{ Form::close() }}
