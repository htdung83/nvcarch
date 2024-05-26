<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __construct(protected ServiceRepository $serviceRepository)
    {
    }

    public function index(Request $request)
    {
        $aboutUs = AboutUs::first();

        $serviceList = $this->serviceRepository->search($request->all());

        $statistic = [
            'projects' => Project::count(),
            'staff' => random_int(100, 200)
        ];

        return view(
            'web.home-page.welcome',
            compact(
                'aboutUs',
                'serviceList',
                'statistic'
            )
        );
    }
}
