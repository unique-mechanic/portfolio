<?php

// app/Http/Controllers/ProjectController.php
namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Fetch all projects
        return view('projects.index', compact('projects'));
    }
}
