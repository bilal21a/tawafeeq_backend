<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Profile extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'type_of_marraige',
        'matarial_status',
        'age',
        'no_of_childs',
        'phone',
        'weight',
        'height',
        'skin_color',
        'physique',
        'job',
        'qulification',
        'financial_condition',
        'health_status',
        'religious_commitment',
        'about',
        'specification_of_partner',
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
