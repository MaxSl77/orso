<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorEducation extends Model
{
    protected $fillable = [
        'university',
        'year',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
