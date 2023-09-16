<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function plans()
    {
        $plans=Plan::get();
        return view('pricing',compact('plans'));
    }
}
