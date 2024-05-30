<?php

namespace App\Observers;

use App\Models\Service;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class ServiceObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        cache()->forget('cachedServiceList');
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        cache()->forget('cachedServiceList');
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        cache()->forget('cachedServiceList');
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
        cache()->forget('cachedServiceList');
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
        cache()->forget('cachedServiceList');
    }
}
