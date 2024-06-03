<?php

namespace App\Repositories;

use App\Models\PostCategory;
use App\Traits\ModelHasPositionTrait;
use Illuminate\Database\Eloquent\Builder;

class PostCategoryRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(PostCategory::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('name', 'LIKE', '%' . $queries['keywords'] . '%');
            }
        );
    }
}
