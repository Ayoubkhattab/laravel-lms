<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Course extends Model
{
    use HasFactory;
    protected $table=['course_users'];
    protected $fillable=['user_id','course_id'];
}
