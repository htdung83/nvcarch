<?php

namespace App\Models;

use App\Observers\TestimonialObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(TestimonialObserver::class)]
class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'construction',
        'comment',
        'img_url',
    ];
}
