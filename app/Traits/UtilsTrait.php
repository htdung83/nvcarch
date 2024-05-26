<?php

namespace App\Traits;

trait UtilsTrait
{
    public function removeRootDomainIn(?string $value, string $replacement = ''): string
    {
        if (trim($value) === '' || $value === null) return '';

        return str_replace(
            [
                'https://x3.com.vn/wp-content/uploads',
                config('app.url') . '/uploads/projects',
                config('app.url') . '/storage',
                config('app.url') . 'storage',
                config('app.url')
            ],
            $replacement,
            $value
        );
    }
}
