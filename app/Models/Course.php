<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'image'
    ];
    public function user(){
        return $this->belongsToMany('App\Models\User','course_users','user_id','course_id');
    }

    public  function student(){
        return $this->belongsToMany(User::class , 'users_course');
    }
}
