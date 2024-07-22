<?php

namespace App\Http\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendQuote(string $name, string $phone, string $email, string $message): void
    {
        $token = env('TELEGRAM_TOKEN');
        $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
        try {
            $this->client->post($url, [
                'json' => [
                    'chat_id' => env('TELEGRAM_CHAT_ID'),
                    'text' => $this->prepareQuote($name, $email, $phone, $message),
                ]
            ]);
        } catch (Exception $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        } catch (GuzzleException $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        }
    }

    public function sendFeedback(string $name, string $message, string $rating): void
    {
        $token = env('TELEGRAM_TOKEN');
        $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
        try {
            $this->client->post($url, [
                'json' => [
                    'chat_id' => env('TELEGRAM_CHAT_ID'),
                    'text' => $this->prepareFeedback($name, $message, $rating),
                ]
            ]);
        } catch (Exception $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        } catch (GuzzleException $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        }
    }

    private function prepareQuote(string $name, string $email, string $phone, string $message): string
    {
        if ($email == '') {
            $email = 'Is not set';
        }

        if ($phone == '') {
            $phone = 'Is not set';
        }

        if ($message == '') {
            $message = 'Is not set';
        }

        return sprintf("⚠️⚠️⚠️ New request
            Name: %s, Email: %s, Phone: %s, Message: %s", $name, $email, $phone, $message);
    }

    private function prepareFeedback(string $name, string $message, string $rating): string
    {
        if ($message == '') {
            $message = 'Is not set';
        }

        return sprintf("🎯🎯🎯 New feedback
            Name: %s, Rating: %s, Message: %s", $name, $rating, $message);
    }
}
