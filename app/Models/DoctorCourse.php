<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorCourse extends Model
{
    protected $fillable = [
        'course',
        'year',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

