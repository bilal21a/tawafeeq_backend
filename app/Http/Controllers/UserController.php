<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index() {
    $users = User::with('profile')->paginate(8);
    // dd($users);
    return view('members_list',compact('users'));
}
}
