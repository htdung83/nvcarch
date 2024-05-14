<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ListServicesController extends Controller
{
    public function __construct(protected ServiceRepository $serviceRepository)
    {
    }

    public function showList(Request $request)
    {
        $list = $this->serviceRepository->search($request);

        return view('admin.services.list')
            ->with('list', $list);
    }
}
