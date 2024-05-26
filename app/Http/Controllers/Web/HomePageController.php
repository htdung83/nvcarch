<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\StaffMemberRepository;
use Illuminate\Http\Request;
use Random\RandomException;

class HomePageController extends Controller
{
    public function __construct(
        protected ServiceRepository $serviceRepository,
        protected ProjectCategoryRepository $projectRepository,
        protected StaffMemberRepository $staffMemberRepository,
    )
    {
    }

    /**
     * @throws RandomException
     */
    public function index(Request $request)
    {
        $aboutUs = AboutUs::first();

        $serviceList = $this->serviceRepository->search();

        $statistic = [
            'projects' => Project::count(),
            'staff' => random_int(100, 200)
        ];

        $staffMembers = $this->staffMemberRepository->search();

        return view(
            'web.home-page.welcome',
            compact(
                'aboutUs',
                'serviceList',
                'statistic',
                'staffMembers'
            )
        );
    }
}
