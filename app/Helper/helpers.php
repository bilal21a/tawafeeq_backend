<?php

use Carbon\Carbon;


function isUserActive($lastSeenTimestamp, $thresholdInMinutes = 5)
{
    $lastSeenTime = Carbon::parse($lastSeenTimestamp);
    $currentTime = Carbon::now();

    // Check if the difference is within the threshold
    return $lastSeenTime->diffInMinutes($currentTime) <= $thresholdInMinutes;
}
