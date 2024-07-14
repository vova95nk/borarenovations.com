<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    private const EMPTY_VALUE = 'EMPTY';

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'message' => 'string',
        ];
    }

    public function getName(): string
    {
        return $this->get('name', self::EMPTY_VALUE);
    }

    public function getEmail(): string
    {
        return $this->get('email', self::EMPTY_VALUE);
    }

    public function getPhone(): string
    {
        return $this->get('phone', self::EMPTY_VALUE);
    }

    public function getMessage(): string
    {
        return $this->get('message', self::EMPTY_VALUE);
    }
}
