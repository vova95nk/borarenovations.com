<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
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
        return $this->get('name');
    }

    public function getEmail(): string
    {
        return $this->get('email');
    }

    public function getPhone(): string
    {
        return $this->get('phone');
    }

    public function getMessage(): string
    {
        return $this->get('message');
    }
}
