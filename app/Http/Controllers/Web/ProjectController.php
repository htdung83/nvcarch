<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $needle = Project::with('category')->whereSlug($slug)->first();

        if (is_null($needle)) {
            abort(404);
        }

        $relatedProjects = Project::query()
            ->category($needle->category->id)
            ->where('id', '<>', $needle->id)
            ->inRandomOrder()
            ->limit(6)
            ->get();

        return view('web.projects.show', compact('needle', 'relatedProjects'));
    }
}
