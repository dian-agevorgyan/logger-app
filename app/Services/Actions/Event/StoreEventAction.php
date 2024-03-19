<?php

namespace App\Services\Actions\Event;

use App\Http\Requests\Event\StoreEventRequest;
use App\Jobs\Events\ProcessEventJob;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class StoreEventAction
{
     public function run(StoreEventRequest $request): JsonResponse
     {
         $userId = Auth::id();

         $eventData = [
             'user_id' => $userId,
             'event_type' => $request->getEventType(),
             'event_data' => $request->getEventData(),
         ];
         ProcessEventJob::dispatchSync($eventData);

         return response()->json(['message' => 'Event queued for processing']);
     }
}
