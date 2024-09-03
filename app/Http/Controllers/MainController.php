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
            'aboutUsImgPath' => $pathPrefix . 'images/about-us/about-us.jpeg',
            'services' => [
                [
                    'name' => 'Cabinet Re-Finishing',
                    'info' => 'Tired of your cabinet color but your doors are in good shape? We’ll make your cabinets look brand new by applying any color you desire, installing new hardware, soft-closing hinges, and more.',
                    'type' => 'slider',
                    'img_path_before' => $pathPrefix . 'images/services-preview/refinishing-before.jpeg',
                    'img_path_after' => $pathPrefix . 'images/services-preview/refinishing-after.jpeg',
                    'num' => 'odd'
                ],
                [
                    'name' => 'Cabinet Re-Dooring',
                    'info' => 'Are your doors falling apart, or do you want to completely change the look of your cabinets? We’ll install new doors, refinish everything in any color you choose, and make your kitchen look brand new.',
                    'type' => 'slider',
                    'img_path_before' => $pathPrefix . 'images/services-preview/redooring-before.jpeg',
                    'img_path_after' => $pathPrefix . 'images/services-preview/redooring-after.jpeg',
                    'num' => 'even'
                ],
                [
                    'name' => 'Custom Finishes',
                    'info' => 'Looking for a unique and stylish look? Bora Renovations will transform your cabinets with our custom finishes, unique designs, and textured surfaces, providing a personalized and distinctive appearance.',
                    'type' => 'photo',
                    'img' => $pathPrefix . 'images/services-preview/custom-finishes.jpg',
                    'num' => 'odd'
                ],
                [
                    'name' => 'More Updates',
                    'info' => 'From crown molding and wooden hoods to backsplashes, soft-closing hinges, drawer glides, new drawer boxes, cabinet organizers, new hardware, and cabinet installations— we cover it all!',
                    'type' => 'photo',
                    'img' => $pathPrefix . 'images/services-preview/more-updates.jpg',
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
            'reDooringFirstImg' => $pathPrefix . 'images/gallery/re-dooring/1a.jpeg',
            'customFinishesFirstImg' => $pathPrefix . 'images/gallery/custom-finishes/1.jpeg',
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
