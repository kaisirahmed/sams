<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTable extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'department_id',
        'name',
        'type',
        'checkin',
        'checkout'
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
