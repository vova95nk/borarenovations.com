<?php

namespace App\Http\Services;

class GalleryService
{
    private const IMAGES_COUNT = 35;

    private const IMAGE_PATH_TEMPLATE = 'images/gallery/%s/%s.jpeg';

    public function getAll(): array {
        $result = [];
        $pathPrefix = env('APP_ENV') === 'prod' ? './public/' : './';

        for ($i = 1; $i <= self::IMAGES_COUNT; $i++) {
            $item = [
                'after' => $pathPrefix . sprintf(self::IMAGE_PATH_TEMPLATE, $i,'1a'),
                'before' => $pathPrefix . sprintf(self::IMAGE_PATH_TEMPLATE, $i, '1b'),
            ];

            $result[] = $item;
        }

        return $result;
    }
}