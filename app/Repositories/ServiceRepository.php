<?php

namespace App\Repositories;

use App\Models\Service;
use App\Traits\ModelHasPositionTrait;

class ServiceRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(Service::class);
    }
}
