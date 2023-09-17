<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }
    public function get_chats_heads()
    {
        return view('chat.chat_heads');
    }
}
