<?php

namespace App\Repositories;

use App\Models\StaffMember;
use App\Traits\ModelHasPositionTrait;

class StaffMemberRepository extends AbstractRepository
{
    use ModelHasPositionTrait;

    public function __construct()
    {
        parent::__construct(StaffMember::class);
    }
}
