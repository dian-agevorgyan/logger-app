<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\DestroyEventRequest;
use App\Http\Requests\Event\IndexEventRequest;
use App\Http\Requests\Event\StoreEventRequest;
use App\Services\Actions\Event\DestroyEventAction;
use App\Services\Actions\Event\IndexEventAction;
use App\Services\Actions\Event\StoreEventAction;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
        public function store(
        StoreEventRequest $request,
        StoreEventAction $storeEventAction
    ): JsonResponse {
        $data = $storeEventAction->run($request);

        return response()->json($data);
    }

    public function index(
        IndexEventRequest $request,
        IndexEventAction $indexEventAction
    ): JsonResponse {
        $data = $indexEventAction->run($request);

        return response()->json($data);
    }

    public function destroy(
        DestroyEventRequest $request,
        DestroyEventAction $destroyEventAction
    ): JsonResponse {
        $data = $destroyEventAction->run($request);

        return response()->json($data);
    }
}
