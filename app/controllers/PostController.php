<?php

class PostController extends BaseController
{

    public function list()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $this->layout->title = 'Post listings';
        $this->layout->main = View::make('dash')->nest('content', 'posts.list', compact('posts'));
    }

    public function show(Post $post)
    {
        $this->layout->title = $post->title;
        $this->layout->main = View::make('home')->nest('content', 'posts.single', compact('post', 'comments'));
    }

    public function new()
    {

    }

    public function edit(Post $post)
    {

    }

    public function delete(Post $post)
    {

    }

    public function save()
    {

    }

}
