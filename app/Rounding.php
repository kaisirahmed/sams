<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rounding extends Model
{
    protected $fillable = [
        'round_type',
        'up_checkin',
        'up_checkout',
        'down_checkin',
        'down_checkout',
    ];
}
