<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    public function show($slug)
    {
        $needle = ProjectCategory::whereSlug($slug)->first();

        if (is_null($needle)) {
            abort(404);
        }

        $projectList = Project::query()
            ->category($needle->id)
            ->paginate(
                request(
                    'size',
                    20
                )
            );

        $breadcrumbs = [
            [
                'name' => 'Loại dự án'
            ]
        ];

        return view('web.projects.category', compact('projectList', 'needle', 'breadcrumbs'));
    }
}
