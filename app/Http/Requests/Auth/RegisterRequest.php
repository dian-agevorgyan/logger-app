<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    const NAME = 'name';
    const SURNAME = 'surname';
    const EMAIL = 'email';
    const PASSWORD = 'password';
    public const TOKEN = 'token';

    public function rules(): array
    {
        return [
            self::NAME => [
                'required',
                'string',
                'max:255',
            ],

            self::SURNAME => [
                'required',
                'string',
                'max:255',
            ],

            self::EMAIL => [
                'required',
                'string',
                'email',
            ],

            self::PASSWORD => [
                'required',
                'string',
                'min:8',
            ],

            self::TOKEN => [
                //
            ]
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getSurname(): string
    {
        return $this->get(self::SURNAME);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

    public function getToken(): ?string
    {
        return $this->get(self::TOKEN);
    }
}
