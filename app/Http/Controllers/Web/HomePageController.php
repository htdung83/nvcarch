<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Repositories\BannerRepository;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\StaffMemberRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;
use Random\RandomException;

class HomePageController extends Controller
{
    public function __construct(
        protected ServiceRepository $serviceRepository,
        protected ProjectCategoryRepository $projectRepository,
        protected StaffMemberRepository $staffMemberRepository,
        protected TestimonialRepository $testimonialRepository,
        protected BannerRepository $bannerRepository,
    )
    {
    }

    /**
     * @throws RandomException
     */
    public function index(Request $request)
    {
        $bannerList = cache()->rememberForever('cachedBannerList', function () {
            return $this->bannerRepository->search(orderBy: ['position' => 'ASC']);
        });

        $aboutUs = AboutUs::first();

        $serviceList = cache()->rememberForever('cachedServiceList', function () {
            return $this->serviceRepository->search();
        });


        $statistic = [
            'projects' => Project::count(),
            'staff' => random_int(100, 200)
        ];

        $staffMemberList = cache()->rememberForever('cachedStaffMemberList', function () {
            return $this->staffMemberRepository->search();
        });

        $testimonialList = cache()->rememberForever('cachedTestimonialList', function () {
            return $this->testimonialRepository->search();
        });

        return view(
            'web.home-page.welcome',
            compact(
                'bannerList',
                'aboutUs',
                'serviceList',
                'statistic',
                'staffMemberList',
                'testimonialList'
            )
        );
    }
}
