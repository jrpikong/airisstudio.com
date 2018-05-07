<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Models\Post;

class ArticleController extends Controller
{
    public function index()
    {
        $blogs = Post::with('authorId')->where('status','=','PUBLISHED')->paginate(10);
        return view('blog_list', compact('blogs'));
    }

    public function articleDetail($slug)
    {
        $blog = Post::where('slug','=',$slug)->first();
        return view('blog_detail', compact('blog'));
    }
}
