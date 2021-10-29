<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_id',
        'course_id',
        'due_time',
        'upload_time'
    ];

    public function assignmentDetails() {
        return $this->hasOne(AssignmentDetails::class, 'assignment_id', 'assignment_id');
    }

    public function course() {
        return $this->hasOne(Course::class, 'course_id', 'course_id');
    }

    public function student() {
        return $this->hasMany(Student::class, 'username', 'student');
    }
}
