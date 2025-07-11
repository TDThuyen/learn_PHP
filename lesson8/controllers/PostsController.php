<?php
require_once('models/Post.php');

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        require_once('views/posts/index.php');
    }
}