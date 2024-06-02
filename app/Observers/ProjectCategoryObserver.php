<?php

namespace App\Observers;

use App\Models\ProjectCategory;

class ProjectCategoryObserver
{
    public function created(ProjectCategory $projectCategory): void
    {
        cache()->forget('cachedProjectCategoryList');
    }

    public function updated(ProjectCategory $projectCategory): void
    {
        cache()->forget('cachedProjectCategoryList');
    }

    public function deleted(ProjectCategory $projectCategory): void
    {
        cache()->forget('cachedProjectCategoryList');
    }

    public function restored(ProjectCategory $projectCategory): void
    {
        cache()->forget('cachedProjectCategoryList');
    }

    public function forceDeleted(ProjectCategory $projectCategory): void
    {
        cache()->forget('cachedProjectCategoryList');
    }
}
