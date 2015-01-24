<?php

class Post extends Eloquent
{

    protected $fillable = ['title', 'content'];

    public function delete()
    {
        foreach ($this->comments as $comment) {
            $comment->delete();
        }
        return parent::delete();
    }

}
