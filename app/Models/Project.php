<?php

// app/Models/Project.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
use HasFactory;

    protected $fillable = [
    'title', 'image', 'tech_stack', 'description', 'live_demo_url', 'github_url',
    ];
}
