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

    public function extractNumberOfChar(string $value, int $length): string
    {
        $text = strip_tags($value);

        $text = substr($text, 0, $length);

        $lastSpace = strrpos($text, ' ');

        return substr($text, 0, $lastSpace);
    }

    public function extractFirstImageSrcIn(string $htmlEncodedContent): ?string
    {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $htmlEncodedContent, $image);

        return $image['src'] ?? null;
    }
}
