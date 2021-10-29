<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'student'
    ];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function student() {
        return $this->hasOne(Student::class, 'username', 'student');
    }

    // public function grades() {
    //     return $this->hasMany(Grade::class, 'student', 'student');
    // }
}
?>