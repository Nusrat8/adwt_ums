<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_no',
        'teacher',
        'start_date',
        'end_date',
        'application_time',
        'reason',
        'status'
    ];

    public function teacher() {
        return $this->belongsTo(Teacher::class, 'username', 'teacher');
    }
}
