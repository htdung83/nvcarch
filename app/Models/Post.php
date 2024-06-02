<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'slug',
        'img_url',
        'post_category_id',
        'description',
        'content',
        'enabled'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id')
            ->withDefault(['name' => '- n/a -']);
    }

    public function scopeIsEnabled($query): void
    {
        $query->where('enabled', 1);
    }
}
