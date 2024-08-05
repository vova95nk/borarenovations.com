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

        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => 'home',
            'feedbacks' => $feedbackService->getFeedbacks(),
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './',
            'services' => [
                [
                    'name' => 'Cabinet Re-Finishing',
                    'info' => 'Update your kitchen with our expert cabinet refinishing services, giving your existing cabinets a fresh and modern look without the need for a full replacement.'
                ],
                [
                    'name' => 'Cabinet Re-Dooring',
                    'info' => 'Update the appearance of your kitchen by replacing old cabinet doors with new, stylish options, enhancing the overall aesthetic while keeping the existing cabinet layout.',
                ],
                [
                    'name' => 'Cabinet Installation',
                    'info' => 'Transform your kitchen with our professional cabinet installation services, providing a perfect and functional fit for your new cabinetry.',
                ],
                [
                    'name' => 'Custom Finishes',
                    'info' => 'Achieve a unique and personalized look for your cabinets with our custom finish services, including cabinet antiquing, glazing, and more.',
                ],
                [
                    'name' => 'Backsplash Installation',
                    'info' => 'Enhance your kitchen\'s design and protect your walls with our backsplash installation services, creating a beautiful and practical feature that adds both style and functionality to your workspace.',
                ],
                [
                    'name' => 'Crown Molding Installation',
                    'info' => "Add elegance and value to your kitchen with our professional crown molding installation, delivering a refined finish that enhances your kitchen's look.",
                ],
                [
                    'name' => 'Accent Pieces Installation',
                    'info' => 'Elevate the look of your kitchen with our accent pieces installation, providing a stylish accent that adds a unique touch to your space.',
                ],
                [
                    'name' => 'Soft-Closing Hinges Installation',
                    'info' => 'Upgrade your cabinets with our soft-closing hinges, providing a quiet and smooth closing mechanism that extends the life of your cabinetry.',
                ],
                [
                    'name' => 'New Drawer Boxes Installation',
                    'info' => 'Replace worn or outdated drawer boxes with our durable new drawer boxes, designed for improved functionality and appearance, offering increased storage efficiency and a fresh look.',
                ],
                [
                    'name' => 'Soft-Closing Drawer Glides Installation',
                    'info' => 'Improve the functionality of your drawers with our soft-closing drawer glides, ensuring a gentle and silent closing action every time, adding convenience to your kitchen.',
                ],
                [
                    'name' => 'New Hardware Installation',
                    'info' => 'Refresh your cabinets with our new hardware installation services. Our professional installation ensures a secure and lasting fit for the knobs and handles you choose.',
                ],
                [
                    'name' => 'Wooden Hoods Installation',
                    'info' => 'Revitalize your kitchen with our wooden hoods installation services, enhancing aesthetics and providing efficient ventilation above your stove.',
                ]
            ]
        ]);
    }

    public function gallery(): View
    {
        return view('gallery', [
            'title' => env('SITE_TITLE'),
            'active' => 'gallery',
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './'
        ]);
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
