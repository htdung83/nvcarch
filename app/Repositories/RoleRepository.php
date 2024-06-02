<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(Role::class);
    }
}
