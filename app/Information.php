<?php

namespace App;

use App\Traits\Enums;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes, Enums;

    protected $fillable = [
        'department_id',
        'account_no',
        'name',
        'gender',
        'nationality',
        'office_tel',
        'photo',
        'title',
        'dob',
        'employment_date',
        'card_number',
        'mobile_number',
        'address'
    ];

    protected $nullable = [
        'office_tel',
        'photo',
        'title',
        'address'
    ];

    protected $enumStatuses = [
        'gender'
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function attendance() {
        return $this->belongsTo(ShemrockZktecoAttendance::class, 'account_no','account_no');
    }
}
