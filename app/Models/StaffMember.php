<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
