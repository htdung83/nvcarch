<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('name', 'LIKE', '%' . $queries['keywords'] . '%')
                    ->orWhere('email', 'LIKE', $queries['keywords'] . '%');
            }
        );
    }
}
