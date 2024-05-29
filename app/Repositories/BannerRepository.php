<?php

namespace App\Repositories;

use App\Models\Banner;
use App\Traits\ModelHasPositionTrait;

class BannerRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(Banner::class);
    }
}
