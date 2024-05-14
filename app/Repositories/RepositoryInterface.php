<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function findOrThrowException(int|string $id): object;
}
