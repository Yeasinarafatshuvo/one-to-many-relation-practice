<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class IndexController extends Controller
{
    public function index($id)
    {
        $author = Author::find($id);
        // var_dump($author->username);
        // var_dump($author->password);
        // dd($author->post);

        foreach($author->post as $post)
        {
            echo $post->title;
            echo $post->cat;
        }
    }
}
