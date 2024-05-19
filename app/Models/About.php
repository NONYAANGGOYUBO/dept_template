<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'deptname',
        'about',
        'street',
        'city',
        'state',
        'district',
        'pincode',
        'lat',
        'lng',

    ];
}
