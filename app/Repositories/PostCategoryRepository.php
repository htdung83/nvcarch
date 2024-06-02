<?php

namespace App\Repositories;

use App\Models\PostCategory;
use App\Traits\ModelHasPositionTrait;

class PostCategoryRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(PostCategory::class);
    }
}
