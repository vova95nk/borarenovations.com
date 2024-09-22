<?php

namespace App\Http\Services;

class GalleryService
{
    public function getAll(): array {
        $pathPrefix = env('APP_ENV') === 'prod' ? './public/' : './';
        $picturesPath = config('gallery.overall');

        if (!$picturesPath) {
            return [];
        }

        $result = [];

        foreach ($picturesPath as $rawItem) {
            $item = [
                'after' => $pathPrefix . $rawItem[0],
            ];

            if (isset($rawItem[1])) {
                $item['before'] = $pathPrefix . $rawItem[1];
            }

            $result[] = $item;
        }

        return $result;
    }
}