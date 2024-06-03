<?php

namespace App\Repositories;

use App\Models\Banner;
use App\Traits\ModelHasPositionTrait;
use Illuminate\Database\Eloquent\Builder;

class BannerRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(Banner::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('head_text', 'LIKE', '%' . $queries['keywords'] . '%')
                    ->orWhere('highlight_text', 'LIKE', '%' . $queries['keywords'] . '%');
            }
        );
    }
}
