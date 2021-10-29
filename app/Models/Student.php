<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
    public $timestamps = false;   


    public function courses() {
        return $this->hasMany(CourseDetails::class, 'student', 'username')->courses;
    }

    public function grades() {
        return $this->hasMany(Grade::class, 'student', 'username');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class, 'student', 'username');
    }
}
