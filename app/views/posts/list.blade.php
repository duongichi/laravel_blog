<h2>Post listings</h2><hr>
<table>
    <thead>
    <tr>
        <th>Post Title</th>
        <th>Post Edit</th>
        <th>Post Delete</th>
        <th>Post View</th>
    </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{HTML::linkRoute('post.edit','Edit',$post->id)}}</td>
                <td>{{HTML::linkRoute('post.delete','Delete',$post->id)}}</td>
                <td>{{HTML::linkRoute('post.show','View',$post->id,['target'=>'_blank'])}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}
