<?php

namespace App\Repositories;

use App\Models\Post;
use App\Traits\HasRepositoryUtils;
use App\Traits\ModelHasPositionTrait;
use Illuminate\Database\Eloquent\Builder;

class PostRepository extends AbstractRepository
{
    use ModelHasPositionTrait;
    use HasRepositoryUtils;

    public function __construct()
    {
        parent::__construct(Post::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('title', 'LIKE', '%' . $queries['keywords'] . '%')
                    ->orWhere('content', 'LIKE', '%' . $queries['keywords'] . '%');
            }
        );
    }

    public function findPostsBefore(Post $post): iterable
    {
        return $this->model()
            ->where(
                'created_at',
                '<',
                $post->created_at
            )
            ->orderByDesc('created_at')
            ->get();
    }
}
