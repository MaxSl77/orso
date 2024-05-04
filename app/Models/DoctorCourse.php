<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorCourse extends Model
{
    protected $table = 'doctor_courses';

    protected $fillable = [
        'doctor_id',
        'course',
        'year',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

