<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'course_name', 
        'institution', 
        'subjects', 
        'start_date', 
        'end_date'
    ];
}
