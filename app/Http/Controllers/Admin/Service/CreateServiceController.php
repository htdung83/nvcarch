<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateServiceRequest;

class CreateServiceController extends Controller
{
    public function showForm()
    {
        return view('admin.services.create');
    }

    public function store(StoreOrUpdateServiceRequest $request)
    {

    }
}
