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

    public function sendTelegram(string $name, string $phone, string $email, string $message): void
    {
        $token = env('TELEGRAM_TOKEN');
        $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
        try {
            Log::info($this->prepareText($name, $email, $phone, $message));
            $resp = $this->client->post($url, [
                'json' => [
                    'chat_id' => env('TELEGRAM_CHAT_ID'),
                    'text' => $this->prepareText($name, $email, $phone, $message),
                ]
            ]);
            Log::info($resp->getStatusCode());
        } catch (Exception $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        } catch (GuzzleException $exception) {
            Log::error('Telegram API error: ' . $exception->getMessage());
        }
    }

    private function prepareText(string $name, string $email, string $phone, string $message): string
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
}
