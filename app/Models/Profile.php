<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'type_of_marriage',
        'marital_status',
        'age',
        'no_of_childs',
        'phone',
        'weight',
        'height',
        'skin_color',
        'physique',
        'job',
        'qualification',
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
