<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;

class ControllerApplication extends Model
{
    protected $table = "event_controller_applications";

    protected $fillable = [
        'id', 'event_id', 'user_id', 'start_availability_timestamp', 'end_availability_timestamp', 'comments', 'submission_timestamp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}