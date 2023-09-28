<?php

namespace App\Http\Controllers;

use App\Models\ProfileVistors;
use Illuminate\Http\Request;

class ProfileVistorController extends Controller
{
    public function profilevistor()
    {
        //    $visited_to_id = $request->visited_to_id
        $visited_to_id = '1';
        //    $ratuser_ided_to_id = $request->user_id
       $user_id = '2';
        $profilevistor = new ProfileVistors();
        $profilevistor->user_id = $user_id;
        $profilevistor->visited_to_id = $visited_to_id;
        $profilevistor->visitor_id = auth()->id();
        $profilevistor->save();
        dd('saved');
    }
}
