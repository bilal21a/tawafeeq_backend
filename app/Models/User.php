<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable=[
        'name' ,
            'email' ,
            'gender' ,
            'nationality' ,
            'country_of_residence' ,
            'password',
    ];
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
