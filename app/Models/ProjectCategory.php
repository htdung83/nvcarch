<?php

namespace App\Models;

use App\Observers\ProjectCategoryObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy(ProjectCategoryObserver::class)]
class ProjectCategory extends Model
{
    protected $table = 'project_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'img_url',
        'position',
        'enabled'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
