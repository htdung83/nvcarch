<?php

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceRepository implements RepositoryInterface
{
    public function findOrThrowException(int|string $id): object
    {
        $needle = Service::find($id);

        if (is_null($needle)) {
            throw new ModelNotFoundException("Không tìm thấy dịch vụ `{$id}`!");
        }

        return $needle;
    }

    public function search(array $queries = [], array $orderBys = [], int $page = 0, int $size = 20): iterable
    {
        $list = Service::query();

        if ($page > 0) {
            return $list->paginate($size);
        }

        return $list->get();
    }

    public function getNextPosition(): int
    {
        return intval(Service::query()->max('position')) + 1;
    }

    public function create(array $validatedData)
    {
        return Service::create($validatedData);
    }

    public function update(int|string $id, array $validatedData): bool
    {
        $needle = $this->findOrThrowException($id);

        return $needle->update($validatedData);
    }

    public function delete(int|string $id): ?bool
    {
        $needle = $this->findOrThrowException($id);

        return $needle->delete();
    }

    public function destroy(Service|Model $model): ?bool
    {
        return $model->forceDelete();
    }
}
