<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollemt extends Model
{
    protected $fillable = ['enroll_no', 'join_date', 'fee', 'batch_id', 'student_id'];
    use HasFactory;

}
