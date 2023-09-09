<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function profilevisitors()
    {
        return $this->hasMany(ProfileVistors::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function plan()
    {
        return $this->hasOne(Plan::class);
    }
}
