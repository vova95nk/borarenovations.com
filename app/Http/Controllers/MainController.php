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
            'prodPrefix' => env('APP_ENV') === 'prod' ? './public/' : './'
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
