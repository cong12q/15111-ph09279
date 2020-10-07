<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ='posts';

    protected $filltable = [
        'student_id',
        'desc',
        'content',
        'image_url',
        'status',
    ];              
    public function comment(){        
                                           // khóa ngoại khóa chính          
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    //function thể hiện mối quan hệ 1 bài post -> 1 sinh viên
    public function student(){
        return $this -> belongsTo(Student::class, 'student_id', 'id');
    }
    //function categories the hien nhieu post, moi post co nhieu categories
    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post' ,'post_id', 'category_id' );
    }
}
