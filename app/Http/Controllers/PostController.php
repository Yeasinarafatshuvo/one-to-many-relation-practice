<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Author;
class PostController extends Controller
{
    public function add_post($id)
    {
        $author = Author::find($id);
        $post = new Post();
        $post->title = 'Title 3';
        $post->cat = 'Cat 3';
        $author->post()->save($post);

    }

    //Get post based on Author ID

    public function show_post($id)
    {
        $post = Author::find($id)->post;
        return $post;
    }
}
