<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 
        'short_description', 
        'long_description', 
        'image', 
        'repo_link', 
        'demo_link', 
        'technology_id'
    ];

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
}
