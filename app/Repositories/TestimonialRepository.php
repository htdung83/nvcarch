<?php

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(Testimonial::class);
    }
}
