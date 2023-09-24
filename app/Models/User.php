<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;
    protected $appends = ['img_url'];
    protected $fillable = [
        'name',
        'email',
        'gender',
        'nationality',
        'country_of_residence',
        'city',
        'password',
    ];
    protected $casts = [
        'rated_by' => 'integer'
    ];
    public function getImgUrlAttribute()
    {
        if ($this->gender == 'ذكر') {
            $img = asset('assets/img/homepage_img/man.png');
        } else {
            $img = asset('assets/img/homepage_img/woman.png');
        }
        return $img;
    }

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
    public function check_rating($rated_to_id, $rater_id)
    {
        $ratingz = Rating::where('rated_to_id', $rated_to_id)->where('rater_id', $rater_id)->count();
        return $ratingz == 0 ? true : false;
    }
}
