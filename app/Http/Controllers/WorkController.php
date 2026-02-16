<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;

class WorkController extends Controller
{
       public function index()
    {
        $projects = require app_path('Data/projects.php');

        return Inertia::render('Work/Index', [
            'projects' => $projects,
        ]);
    }

    public function show(string $slug)
    {
        $projects = require app_path('Data/projects.php');

        $project = collect($projects)->firstWhere('slug', $slug);

        abort_if(!$project, 404);

        return Inertia::render('Work/Show', [
            'project' => $project,
        ]);
    }
}

