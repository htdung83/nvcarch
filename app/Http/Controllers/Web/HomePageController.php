<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __construct(protected ServiceRepository $serviceRepository)
    {
    }

    public function index(Request $request)
    {
        $serviceList = $this->serviceRepository->search($request->all());

        return view('web.home-page.welcome')
            ->with('serviceList', $serviceList);
    }
}
