<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'cover'];

    public function paths()
    {
        return $this->hasMany(ProjectPath::class, 'project_id');
    }
}

