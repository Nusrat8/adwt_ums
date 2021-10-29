<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'fullname',
        'phone',
        'address',
        'dob',
        'department_name'
    ];

    public function leaveApplications() {
        return $this->hasMany(LeaveApplication::class, 'teacher', 'username');
    }

    public function courses() {
        return $this->hasMany(Course::class, 'teacher', 'username');
    }
}
