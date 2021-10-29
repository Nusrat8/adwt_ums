<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'fullname',
        'phone',
        'address',
        'dob'
         

    ];
    public $timestamps = false;  
}
