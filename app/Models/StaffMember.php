<?php

namespace App\Models;

use App\Observers\StaffMemberObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(StaffMemberObserver::class)]
class StaffMember extends Model
{
    protected $table = 'staff_members';

    protected $fillable = [
        'name',
        'title',
        'position',
        'img_url',
        'description',
        'enabled'
    ];
}
