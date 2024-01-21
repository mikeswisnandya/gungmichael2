<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('admin.projects', compact('projects'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.projects.create', compact('category'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('portfolio', 'public');

        // Create a new portfolio entry in the database
        Projects::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $imagePath,
            'video_source' => $request->input('video_source'),
            'category_id' => $request->input('category_id'),
        ]);


        return redirect()->route('projects.index')->with('Success', 'Projects Created Successfully!');
    }

    public function show(projects $projects)
    {
        return view('admin.projects.show', compact('projects'));
    }

    public function edit(projects $projects)
    {
        $category = Category::all();
        return view('admin.projects.edit', compact('projects', 'category'));
    }

    public function update(Request $request, projects $projects)
    {
        $projects->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Projects $projects)
    {
        $projects->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

}
