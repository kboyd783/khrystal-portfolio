<?php


namespace App\Http\Controllers;

use app;
use Inertia\Inertia;
use App\Data\Projects;


class HomeController extends Controller
{
    public function show()
    {
        $projects = collect(require app_path('Data/projects.php'))
            ->sortByDesc('year')
            ->values()
            ->all();

        return Inertia::render('Home', [
            'projects' => $projects,
        ]);
    }
}
