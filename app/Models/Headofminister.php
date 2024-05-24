<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headofminister extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'postname',
        'email',
        'phone',
        'twitter',
        'profile_image',
    ];
}
