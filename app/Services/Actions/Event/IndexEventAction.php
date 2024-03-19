<?php

namespace App\Services\Actions\Event;

use App\Http\Requests\Event\IndexEventRequest;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class IndexEventAction
{
    public function run(IndexEventRequest $request): JsonResponse
    {
        $events = Event::all();

        return response()->json($events);
    }
}
