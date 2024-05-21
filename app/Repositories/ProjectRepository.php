<?php

namespace App\Repositories;

use App\Models\Project;
use App\Traits\ModelHasPositionTrait;

class ProjectRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(Project::class);
    }
}
