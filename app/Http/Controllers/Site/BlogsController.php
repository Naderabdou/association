<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('site.blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $latest_blogs = Blog::where('id', '!=', $id)->latest()->take(3)->get();
        $blog = Blog::findOrFail($id);
        return view('site.blogs.show', compact('blog', 'latest_blogs'));
    }
}
