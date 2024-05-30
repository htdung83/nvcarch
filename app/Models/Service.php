<?php

namespace App\Models;

use App\Observers\ServiceObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(ServiceObserver::class)]
class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'icon',
        'name',
        'description',
        'position'
    ];
}
