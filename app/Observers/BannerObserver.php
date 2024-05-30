<?php

namespace App\Observers;

use App\Models\Banner;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class BannerObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Banner "created" event.
     */
    public function created(Banner $banner): void
    {
        cache()->forget('cachedBannerList');
    }

    /**
     * Handle the Banner "updated" event.
     */
    public function updated(Banner $banner): void
    {
        cache()->forget('cachedBannerList');
    }

    /**
     * Handle the Banner "deleted" event.
     */
    public function deleted(Banner $banner): void
    {
        cache()->forget('cachedBannerList');
    }

    /**
     * Handle the Banner "restored" event.
     */
    public function restored(Banner $banner): void
    {
        cache()->forget('cachedBannerList');
    }

    /**
     * Handle the Banner "force deleted" event.
     */
    public function forceDeleted(Banner $banner): void
    {
        cache()->forget('cachedBannerList');
    }
}
