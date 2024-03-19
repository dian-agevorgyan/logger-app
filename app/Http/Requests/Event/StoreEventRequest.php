<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    const EVENT_TYPE = 'eventType';
    const EVENT_DATA = 'eventData';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::EVENT_TYPE => [
                'required',
                'string',
            ],
            self::EVENT_DATA => [
                'required',
                'array',
            ],
        ];
    }

    public function getEventType(): string
    {
        return $this->get(self::EVENT_TYPE);
    }

    public function getEventData(): array
    {
        return $this->get(self::EVENT_DATA);
    }
}
