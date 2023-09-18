<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile() {
        $user_id = Auth::id();
        $user = User::where('id',$user_id)
        ->first();
        return view('profile_new',compact('user'));
    }
    public function members_profile($id) {
        $user_id = Auth::id();
        $user = User::where('id',$id)
        ->first();
        return view('members_profile',compact('user'));
    }
}
