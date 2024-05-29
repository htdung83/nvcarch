<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
