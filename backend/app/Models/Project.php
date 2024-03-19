<?php
namespace App\Models;

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
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'projects_technologies', 'id_project', 'id_technology');
    }
}

