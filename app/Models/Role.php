<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name'
    ];

    public $incrementing = false;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_has_roles',
            'role_id',
            'user_id'
        );
    }
}
