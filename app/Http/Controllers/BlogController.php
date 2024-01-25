<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('admin.blog', compact('blogs', 'categories'));
    }

    public function show(Blog $blogs)
    {
        return view('admin.blog.show', compact('blogs'));
    }
}
