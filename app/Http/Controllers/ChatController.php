<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
    public function get_chats_heads()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('profile.chat_heads', compact('users'));
    }
    public function get_chat_id($partner_id)
    {
        $initiator_id = auth()->id();
        $chat = Chats::where('partner_id', $partner_id)->where('initiator_id', $initiator_id)->first();
        if ($chat) {
            return $chat->id;
        }
        $chat = Chats::where('partner_id', $initiator_id)->where('initiator_id', $partner_id)->first();
        if ($chat) {
            return $chat->id;
        }
        $chat = new Chats();
        $chat->initiator_id = $initiator_id;
        $chat->partner_id = $partner_id;
        $chat->save();

        return $chat->id;
    }

    public function send_message(Request $request)
    {
        $sender_id = auth()->id();

        $message = new Messages();
        $message->body = $request->message;
        $message->sender_id = $sender_id;
        $message->chat_id = $request->internet_conn;
        $message->save();

        return "message sent successfully";
    }
}
