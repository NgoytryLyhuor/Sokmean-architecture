<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPath extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'title', 'description', 'cover'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

