<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'slug',
        'slogan',
        'headline',
        'content',
        'button_url',
        'img_url',
    ];
}
