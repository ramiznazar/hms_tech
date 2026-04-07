<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('sort_order')->orderBy('published_at', 'desc')->get();
        return view('website.pages.blog.blog', compact('blogs'));
    }

    public function detail(Blog $blog){
        return view('website.pages.blog.detail', compact('blog'));
    }
}
