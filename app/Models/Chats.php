<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SyncsWithFirebase;

class Chats extends Model
{
    use SyncsWithFirebase;
    protected $fillable = ['initiator_id', 'partner_id'];

    // who initiated the chat
    public function initiator()
    {
        return $this->belongsTo(User::class, 'initiator_id');
    }

    // Chat Partner
    public function partner()
    {
        return $this->belongsTo(User::class, 'partner_id');
    }

    public static function exists($user1, $user2) {
        return Chats::where(function($q) use ($user1, $user2) {
            $q->where('initiator_id', $user1->id)->where('partner_id', $user2->id);
        })->orWhere(function($q) use ($user1, $user2) {
            $q->where('initiator_id', $user2->id)->where('partner_id', $user1->id);
        })->first();
    }

}
