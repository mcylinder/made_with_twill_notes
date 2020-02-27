<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('published', 1)->get();

        return view('project.index', compact('projects'));
    }

    public function show($slug = null)
    {
        $project = Project::forSlug($slug)->firstOrFail();

        return view('project.show', compact('project'));
    }
}
