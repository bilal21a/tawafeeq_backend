<?php

namespace App\Http\Controllers;

use App\Mail\EmailNotificationMail;
use App\Models\Chats;
use App\Models\EmailNotification;
use App\Models\Messages;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function index()
    {
        //
    }
    public function get_chats_heads()
    {
        $chats = Chats::where('partner_id', auth()->id())->orWhere('initiator_id', auth()->id())->get();
        if (check_expiry() && $chats->count() > 0) {
            return view('profile.chat_heads', compact('chats'));
        } else {
            return false;
        }
    }
    public function chat_mark_as_read($chat_id)
    {
        $chat = Chats::find($chat_id);
        $count_type = $chat->initiator_id == auth()->id() ? 'initiator_count' : 'partner_count';
        $chat->$count_type = 0;
        $chat->save();
        EmailNotification::where('chat_id', $chat_id)->delete();
        return 'marked_as read';
    }

    public function send_message(Request $request)
    {
        if (check_expiry()) {
            $sender_id = auth()->id();
            $chat = Chats::find($request->internet_conn);
            if ($chat->partner_block == 1 || $chat->initiator_block == 1) {
                return false;
            }
            $message = new Messages();
            $message->body = $request->message;
            $message->sender_id = $sender_id;
            $message->chat_id = $request->internet_conn;
            $message->save();

            $sender = $chat->initiator_id == $sender_id ? $chat->initiator : $chat->partner;
            $reciver = $chat->initiator_id == $sender_id ? $chat->partner : $chat->initiator;
            $chat->initiator_count = $chat->initiator_id == $sender_id ? 0 : $chat->initiator_count + 1;
            $chat->partner_count = $chat->partner_id == $sender_id ? 0 : $chat->partner_count + 1;
            $chat->save();

            $notification = 'رسالة جديدة وصلت من ' . $sender->name;

            generateNotification($sender_id, $reciver->id, $notification);
            generateEmailNoti($message->chat_id, $message->id, $sender_id, $reciver->id);
            return "message sent successfully";
        }
    }

    public function chat_load($partner_id)
    {
        $initiator_id = auth()->id();
        if ($initiator_id == $partner_id) {
            return redirect()->route('something_went_wrong');
        }
        $chat = Chats::where('partner_id', $partner_id)->where('initiator_id', $initiator_id)->first();
        if ($chat) {
            return redirect()->route('profile', ['chat_id' => $chat->id]);
        }
        $chat = Chats::where('partner_id', $initiator_id)->where('initiator_id', $partner_id)->first();
        if ($chat) {
            return redirect()->route('profile', ['chat_id' => $chat->id]);
        }
        $chat = new Chats();
        $chat->initiator_id = $initiator_id;
        $chat->partner_id = $partner_id;
        $chat->save();
        return redirect()->route('profile', ['chat_id' => $chat->id]);
    }
    public function chat_block($chat_id, $type)
    {
        $chat = Chats::find($chat_id);
        if ($chat->partner_id == auth()->id()) {
            $chat->initiator_block = $type;
            $chat->save();
            return $chat->partner_block == 1 || $chat->initiator_block == 1 ? true : false;
        } elseif ($chat->initiator_id == auth()->id()) {
            $chat->partner_block = $type;
            $chat->save();
            return $chat->partner_block == 1 || $chat->initiator_block == 1 ? true : false;
        } else {
            return false;
        }
    }
    public function something_went_wrong()
    {
        return view('errors.went_wrong');
    }
}
