<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_name',
        'semester',
        'teacher',
        'status'
    ];

    public function teacher() {
        return $this->hasOne(Teacher::class);
    }

     //public function cousesDetails() {
         //return $this->hasMany(CourseDetails::class, 'course_id', 'course_id');
    // }

    public function students() {
        return $this->hasMany(CourseDetails::class, 'course_id', 'course_id')->student;
    }

    public function grades() {
        return $this->hasMany(Grade::class, 'course_id', 'course_id');
    }

    public function lectureNotes() {
        return $this->hasMany(LectureNotes::class, 'course_id', 'course_id');
    }

    public function notices() {
        return $this->hasMany(Notice::class, 'course_id', 'course_id');
    }
}
