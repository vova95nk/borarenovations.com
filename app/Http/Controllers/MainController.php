<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\QuoteRequest;
use App\Http\Services\FeedbackService;
use App\Http\Services\TelegramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class MainController extends Controller
{
    public function main(): View
    {
        /** @var FeedbackService $feedbackService */
        $feedbackService = resolve(FeedbackService::class);
        $pathPrefix = env('APP_ENV') === 'prod' ? './public/' : './';

        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => 'home',
            'feedbacks' => $feedbackService->getFeedbacks(),
            'prodPrefix' => $pathPrefix,
            'services' => [
                [
                    'name' => 'Cabinet Re-Finishing',
                    'info' => 'Update your kitchen with our expert cabinet refinishing services, giving your existing cabinets a fresh and modern look without the need for a full replacement.',
                    'img_path_before' => $pathPrefix . 'images/gallery/ba/1b.jpeg',
                    'img_path_after' => $pathPrefix . 'images/gallery/ba/1a.jpeg',
                    'num' => 'odd'
                ],
                [
                    'name' => 'Cabinet Re-Dooring',
                    'info' => 'Update the appearance of your kitchen by replacing old cabinet doors with new, stylish options, enhancing the overall aesthetic while keeping the existing cabinet layout.',
                    'img_path_before' => $pathPrefix . 'images/gallery/ba/1b.jpeg',
                    'img_path_after' => $pathPrefix . 'images/gallery/ba/1a.jpeg',
                    'num' => 'even'
                ],
                [
                    'name' => 'Cabinet Installation',
                    'info' => 'Transform your kitchen with our professional cabinet installation services, providing a perfect and functional fit for your new cabinetry.',
                    'img_path_before' => $pathPrefix . 'images/gallery/ba/2b.jpeg',
                    'img_path_after' => $pathPrefix . 'images/gallery/ba/2a.jpeg',
                    'num' => 'odd'
                ],
                [
                    'name' => 'More Updates',
                    'info' => 'Enhance the beauty, modernity, and functionality of your kitchen with our comprehensive services, including backsplash installation, crown molding, new hinges, hardware installation, and more.',
                    'img_path_before' => $pathPrefix . 'images/gallery/ba/3b.jpeg',
                    'img_path_after' => $pathPrefix . 'images/gallery/ba/3a.jpeg',
                    'num' => 'even'
                ],
            ],
        ]);
    }

    public function gallery(): View
    {
        $pathPrefix = env('APP_ENV') === 'prod' ? './public/' : './';

        return view('gallery', [
            'title' => env('SITE_TITLE'),
            'active' => 'gallery',
            'prodPrefix' => $pathPrefix,
            'refinishingPath' => $pathPrefix . 'images/gallery/refinishing/',
            'refinishingFirstImg' => $pathPrefix . 'images/gallery/refinishing/1a.jpeg',
        ]);
    }

    public function galleryList(): JsonResponse
    {
        $pathPrefix = env('APP_ENV') === 'prod' ? './public/' : './';

        $config = [
            'refinishing' => [
                1 => [
                    'after' => $pathPrefix . 'images/gallery/refinishing/1a.jpeg',
                    'before' => $pathPrefix . 'images/gallery/refinishing/1b.jpeg',
                ],
                2 => [
                    'after' => $pathPrefix . 'images/gallery/refinishing/2a.jpeg',
                    'before' => $pathPrefix . 'images/gallery/refinishing/2b.jpeg',
                ],
            ],
        ];

        return JsonResponse::fromJsonString(json_encode($config));
    }

    public function part(string $part): View
    {
        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => $part,
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './'
        ]);
    }

    public function service(string $serviceName): View
    {
        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => 'services',
            'sub-active' => $serviceName,
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './'
        ]);
    }

    public function getQuote(QuoteRequest $request): JsonResponse
    {
        /** @var TelegramService $service */
        $service = resolve(TelegramService::class);

        $service->sendQuote($request->getName(), $request->getPhone(), $request->getEmail(), $request->getMessage());

        return new JsonResponse(null, 200);
    }

    public function sendFeedback(FeedbackRequest $request): JsonResponse
    {
        Log::error("test");
        /** @var TelegramService $service */
        $service = resolve(TelegramService::class);

        $service->sendFeedback($request->getName(), $request->getMessage(), $request->getRating());

        return new JsonResponse(null, 200);
    }

    public function maintenance(): View
    {
        return view('maintenance', [
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './',
        ]);
    }
}
