<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Doctor extends Model
{
    const NO_IMAGE = 'uploads/orso_clinic.png';

    protected $fillable = [
        'thumbnail',
        'name',
        'profession',
        'category',
        'inst',
    ];

    public function educations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorEducation::class);
    }

    public function courses()
    {
        return $this->hasMany(DoctorCourse::class);
    }

//    public function getThumbnailAttribute($value)
//    {
//        if($value != null){
//            return $value ;
//        }
//
//        return self::NO_IMAGE;
//    }
//
//    public function setThumbnailAttribute($value)
//    {
//        if ($value instanceof UploadedFile) {
//            if ($this->thumbnail !== self::NO_IMAGE && Storage::exists($this->thumbnail)) {
//                Storage::delete($this->thumbnail);
//            }
//            $this->attributes['thumbnail'] = $value->store("uploads");
//        }
//    }
}
