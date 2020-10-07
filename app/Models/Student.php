<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ='students';

    protected $filltable = [
        'name',
        'phone',
        'age',
        'gender',
        'address',
        'is_active',
    ];
    //function post the hien 1 sinh viên có nhiều bài post
    public function posts(){
        return $this->hasMany(Post::class, 'student_id', 'id');
    }
}
