<?php

namespace App\Models;

use App\Traits\SyncsWithFirebase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory,SyncsWithFirebase;
    protected $casts = [
        'sender_id' => 'integer',
        'user_id' => 'integer',
        'is_read' => 'integer',
    ];
}
