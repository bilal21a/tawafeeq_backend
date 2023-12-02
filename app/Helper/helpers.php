<?php

use App\Models\EmailNotification;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
    $notification->alert_type = 'light';
    $notification->save();
}
function check_expiry()
{
    $currentDate = Carbon::now()->format('Y-m-d');
    $expiryDate = Carbon::parse(Auth::user()->expired_at);

    if ($currentDate < $expiryDate) {
        return true;
    } else {
        return false;
    }
}
function generateEmailNoti($chat_id,$message_id,$sender_id, $reciver_id) {
    $email_notification = new EmailNotification();
    $email_notification->chat_id = $chat_id;
    $email_notification->message_id = $message_id;
    $email_notification->reciver_id = $reciver_id;
    $email_notification->sender_id = $sender_id;
    $email_notification->save();
}
