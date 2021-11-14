<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);

        $comment = new Comment;
        $comment->body = "Hi ItSolutionStuff.com";

        $post->comments()->save($comment);

        return $post->comments;
    }

    public function tag()
    {
        $post = Post::find(1);

        $tag = new Tag;
        $tag->name = "ItSolutionStuff.com";

        $post->tags()->save($tag);

        return $post->tags;
    }
}
