<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_name',
        'min',
        'max'
    ];
}
