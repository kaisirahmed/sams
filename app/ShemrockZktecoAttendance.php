<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShemrockZktecoAttendance extends Model
{
    protected $fillable = [
        'account_no',
        'access_time',
        'in_out',
        'device_no',
    ];

    public function information() {
        return $this->hasOne(Information::class, 'account_no','account_no');
    }
}
