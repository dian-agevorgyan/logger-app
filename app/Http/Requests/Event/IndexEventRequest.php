<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class IndexEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
}
