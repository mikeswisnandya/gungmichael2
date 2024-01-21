<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blog'));
    }
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
        ]);

        $blogs = Blog::create($validatedData);

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully');
    }

    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
        ]);

        $blogs = Blog::findOrFail($id);
        $blogs->update($validatedData);

        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully');
    }

    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully');
    }
}
