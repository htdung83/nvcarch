<?php

namespace App\Observers;

use App\Models\StaffMember;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class StaffMemberObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the StaffMember "created" event.
     */
    public function created(StaffMember $staffMember): void
    {
        cache()->forget('cachedStaffMemberList');
    }

    /**
     * Handle the StaffMember "updated" event.
     */
    public function updated(StaffMember $staffMember): void
    {
        cache()->forget('cachedStaffMemberList');
    }

    /**
     * Handle the StaffMember "deleted" event.
     */
    public function deleted(StaffMember $staffMember): void
    {
        cache()->forget('cachedStaffMemberList');
    }

    /**
     * Handle the StaffMember "restored" event.
     */
    public function restored(StaffMember $staffMember): void
    {
        cache()->forget('cachedStaffMemberList');
    }

    /**
     * Handle the StaffMember "force deleted" event.
     */
    public function forceDeleted(StaffMember $staffMember): void
    {
        cache()->forget('cachedStaffMemberList');
    }
}
