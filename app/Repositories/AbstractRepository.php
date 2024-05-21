<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AbstractRepository implements RepositoryInterface
{
    public function __construct(protected string $modelClassName)
    {
    }

    public function model(): Model
    {
        return (new $this->modelClassName);
    }

    public function findOrThrowException(int|string $id): Model
    {
        $needle = $this->model()->find($id);

        if (is_null($needle)) {
            throw new ModelNotFoundException("Không tìm thấy loại dự án `{$id}`!");
        }

        return $needle;
    }

    public function create(array $validatedData): Model
    {
        return $this->model()->create($validatedData);
    }

    public function search(array $queries = [], array $orderBy = [], array|string $relationships = [], int $page = 0, int $size = 20): iterable
    {
        $list = $this->model()->query();

        if (!empty($relationships)) {
            $list->with($relationships);
        }

        if ($page > 0) {
            return $list->paginate($size);
        }

        return $list->get();
    }

    public function update(mixed $id, array $validatedData): Model
    {
        $needle = $this->findOrThrowException($id);

        $needle->update($validatedData);

        return $needle;
    }

    public function delete(mixed $id): ?bool
    {
        $needle = $this->findOrThrowException($id);

        return $needle->delete();
    }
}
