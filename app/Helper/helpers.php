<?php

use App\Activity;
use Illuminate\Support\Facades\Auth;

function user_id()
{
    $user_id = Auth::id();
    return $user_id;
}
