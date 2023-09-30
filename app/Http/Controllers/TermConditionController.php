<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    public function termcondition(){
        return view('terms&conditions');
    }
}
