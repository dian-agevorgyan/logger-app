<?php

namespace App\Services\Actions\Event;

use App\Http\Requests\Event\DestroyEventRequest;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class DestroyEventAction
{
        public function run(DestroyEventRequest $request): JsonResponse
    {
        $eventId = $request->getEventId();
        $event = Event::find($eventId);

        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
}
