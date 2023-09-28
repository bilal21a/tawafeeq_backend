<?php

use App\Models\Notification;
use Carbon\Carbon;


function isUserActive($lastSeenTimestamp, $thresholdInMinutes = 5)
{
    $lastSeenTime = Carbon::parse($lastSeenTimestamp);
    $currentTime = Carbon::now();

    // Check if the difference is within the threshold
    return $lastSeenTime->diffInMinutes($currentTime) <= $thresholdInMinutes;
}
function generateNotification($senderId, $userId, $body)
    {
        $notification = new Notification();
        $notification->sender_id = $senderId;
        $notification->user_id = $userId;
        $notification->body = $body;
        $notification->is_read = 0;
        $notification->save();
    }
