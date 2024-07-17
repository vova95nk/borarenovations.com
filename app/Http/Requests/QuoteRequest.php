<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    private const EMPTY_VALUE = 'EMPTY';

    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required',
            'message' => 'required|string',
        ];
    }

    public function getName(): string
    {
        return sprintf("%s %s", $this->getFirstName(), $this->getLastName());
    }

    protected function getFirstName(): string
    {
        return $this->get('first_name', self::EMPTY_VALUE);
    }

    protected function getLastName(): string
    {
        return $this->get('last_name', self::EMPTY_VALUE);
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
