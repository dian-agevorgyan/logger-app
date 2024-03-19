<?php

namespace App\Jobs\Events;


use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessEventJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private array $eventData;

    public function __construct(array $eventData)
    {
        $this->eventData = $eventData;
    }

    public function handle()
    {
        try {
            $eventDataWithUserId = array_merge($this->eventData, [
                'userId' => $this->eventData['user_id'],
                'eventType' => $this->eventData['event_type'],
                'eventData' => $this->eventData['event_data'],
            ]);
            Event::create($eventDataWithUserId);
        } catch (\Throwable $exception) {
            dd($exception);
        }
    }
}
