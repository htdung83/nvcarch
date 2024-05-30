<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class TestimonialObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Testimonial "created" event.
     */
    public function created(Testimonial $testimonial): void
    {
        cache()->forget('cachedTestimonialList');
    }

    /**
     * Handle the Testimonial "updated" event.
     */
    public function updated(Testimonial $testimonial): void
    {
        cache()->forget('cachedTestimonialList');
    }

    /**
     * Handle the Testimonial "deleted" event.
     */
    public function deleted(Testimonial $testimonial): void
    {
        cache()->forget('cachedTestimonialList');
    }

    /**
     * Handle the Testimonial "restored" event.
     */
    public function restored(Testimonial $testimonial): void
    {
        cache()->forget('cachedTestimonialList');
    }

    /**
     * Handle the Testimonial "force deleted" event.
     */
    public function forceDeleted(Testimonial $testimonial): void
    {
        cache()->forget('cachedTestimonialList');
    }
}
