<?php

class PostController extends BaseController
{

    public function listBlog()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $this->layout->title = 'Post listings';
        $this->layout->main = View::make('dash')->nest('content', 'posts.list', compact('posts'));
    }

    public function showBlog(Post $post)
    {
        $this->layout->title = $post->title;
        $this->layout->main = View::make('home')->nest('content', 'posts.single', compact('post'));
    }

    public function newBlog()
    {
        $this->layout->title = 'New Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.new');
    }

    public function editBlog(Post $post)
    {
        $this->layout->title = 'Edit Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.edit', compact('post'));

    }

    public function deleteBlog(Post $post)
    {
        $post->delete();
        return Redirect::route('post.list')->with('success', 'Post is deleted!');

    }

    public function saveBlog()
    {
        $post = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($post, $rules);
        if ($valid->passes()) {
            $post = new Post($post);
            $post->read_more = (strlen($post->content) > 50) ? substr($post->content, 0, 50) : $post->content;
            $post->save();
            return Redirect::to('/')->with('success', 'Post is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    }

    public function updateBlog(Post $post)
    {
        $data = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes()) {
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->read_more = (strlen($post->content) > 50) ? substr($post->content, 0, 50) : $post->content;
            if (count($post->getDirty()) > 0) {
                $post->save();
                return Redirect::back()->with('success', 'Post is updated!');
            } else
                return Redirect::back()->with('success', 'Nothing to update!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    }
}
