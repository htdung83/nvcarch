<?php

namespace App\Repositories;

use App\Models\ProjectCategory;
use App\Traits\ModelHasPositionTrait;

class ProjectCategoryRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(ProjectCategory::class);
    }
}
