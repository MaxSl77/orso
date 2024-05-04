<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorExample extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        "title",
        "description",
        "image_before",
        "image_after",
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
