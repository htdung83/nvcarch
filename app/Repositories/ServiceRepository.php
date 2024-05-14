<?php

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceRepository
{
    public function search(Request $request): iterable
    {
        $list = Service::query();

        if ($request->has('page')) {
            return $list->paginate($request->input('size', 20));
        }

        return $list->get();
    }

    public function getNextPosition(): int
    {
        return intval(Service::query()->max('position')) + 1;
    }
}
