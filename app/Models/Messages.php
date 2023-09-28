<?php

namespace App\Models;

use App\Traits\SyncsWithFirebase;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use SyncsWithFirebase;
}
