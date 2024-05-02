<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'syllabus', 'duration'];
    use HasFactory;

    public function batch() {
    return $this->hasMany(Batch::class);
    }
}
