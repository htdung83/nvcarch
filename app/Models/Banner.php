<?php

namespace App\Models;

use App\Observers\BannerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(BannerObserver::class)]
class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'img_url',
        'head_text',
        'highlight_text',
        'button_url',
        'enabled',
        'position'
    ];
}
