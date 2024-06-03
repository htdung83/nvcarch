<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'slug',
        'img_url',
        'description',
        'content',
        'enabled',
        'project_category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            ProjectCategory::class,
            'project_category_id'
        )
            ->withDefault(['name' => '- n/a -']);
    }

    public function scopeCategory($query, int $categoryId): void
    {
        $query->where('project_category_id', $categoryId);
    }
}
