<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateServiceRequest;
use App\Models\Service;
use App\Repositories\ServiceRepository;

class CreateServiceController extends Controller
{
    public function __construct(
        private ServiceRepository $serviceRepository
    ) {
    }

    public function showForm()
    {
        $nextPosition = $this->serviceRepository->getNextPosition();

        return view('admin.services.create', ['nextPosition' => $nextPosition]);
    }

    public function store(StoreOrUpdateServiceRequest $request)
    {
        try {
            Service::create($request->validated());

            return redirect()->route('admin.services.list')->withSuccess(trans('messages.saved_success'));
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
