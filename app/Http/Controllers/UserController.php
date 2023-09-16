<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when(request('nationality'), function ($q) {
            return $q->where('nationality', request('nationality'));
        })
        ->when(request('country_of_residence'), function ($q) {
            return $q->where('country_of_residence', request('country_of_residence'));
        })
        ->whereHas('profile', function ($query) {
                $query->when(request('marital_status'), function ($q) {
                    return $q->where('marital_status', request('marital_status'));
                });
            })->get();
        return view('members_list', compact('users'));
    }
}
