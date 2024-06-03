<?php

namespace App\Repositories;

use App\Models\StaffMember;
use App\Traits\ModelHasPositionTrait;
use Illuminate\Database\Eloquent\Builder;

class StaffMemberRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(StaffMember::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('name', 'LIKE', '%' . $queries['keywords'] . '%')
                    ->orWhere('description', 'LIKE', '%' . $queries['keywords'] . '%');
            }
        );
    }
}
