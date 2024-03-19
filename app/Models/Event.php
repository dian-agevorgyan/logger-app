<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\User
 *
 * @property int $id;
 * @property string $userId;
 * @property string $eventType;
 * @property string $eventData;
 */

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'eventType',
        'eventData',
    ];

    protected $casts = [
        'eventData' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
