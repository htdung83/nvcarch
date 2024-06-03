<?php

namespace App\Repositories;

use App\Models\ProjectCategory;
use App\Traits\ModelHasPositionTrait;
use Illuminate\Database\Eloquent\Builder;

class ProjectCategoryRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(ProjectCategory::class);
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
