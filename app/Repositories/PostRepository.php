<?php

namespace App\Repositories;

use App\Models\Post;
use App\Traits\ModelHasPositionTrait;

class PostRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(Post::class);
    }
}
