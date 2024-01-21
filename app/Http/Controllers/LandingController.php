<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Projects;

class LandingController extends Controller
{
    public function welcome()
    {
        $categories = Category::all();
        $projects = Projects::all();
        return view('welcome', compact('categories', 'projects'));
    }

}
