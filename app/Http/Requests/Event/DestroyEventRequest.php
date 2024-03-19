<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class DestroyEventRequest extends FormRequest
{
    const EVENT_ID = 'eventId';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::EVENT_ID => [
                'required',
                'int',
            ],
        ];
    }

    public function getEventId(): string
    {
        return $this->get(self::EVENT_ID);
    }
}
