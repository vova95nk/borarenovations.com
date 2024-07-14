<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Http\Services\FeedbackService;
use App\Http\Services\TelegramService;
use Illuminate\Http\JsonResponse;
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
            'feedbacks' => $feedbackService->getFeedbacks()
        ]);
    }

    public function part(string $part): View
    {
        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => $part,
        ]);
    }

    public function service(string $serviceName): View
    {
        return view('main', [
            'title' => env('SITE_TITLE'),
            'active' => 'services',
            'sub-active' => $serviceName,
        ]);
    }

    public function getQuote(QuoteRequest $request): JsonResponse
    {
        /** @var TelegramService $service */
        $service = resolve(TelegramService::class);

        $service->sendTelegram($request->getName(), $request->getPhone(), $request->getEmail(), $request->getMessage());

        return new JsonResponse(null, 200);
    }

    public function maintenance(): View
    {
        return view('maintenance');
    }
}
