<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function timetable() {
        return $this->hasOne(TimeTable::class);
    }

    public function information() {
        return $this->hasMany(Information::class);
    }

    public static function boot() {
        parent::boot();
    
        static::deleting(function($department) {
            // here you could instantiate each related department
            // in this way the boot function in the Department model will be called
            $department->information->each(function($information) {
                // and then the static::deleting method when you delete each one
                $information->delete();
            });
        });
    }
}
