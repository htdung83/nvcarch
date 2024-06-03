<?php

namespace App\Repositories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Builder;

class TestimonialRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(Testimonial::class);
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
