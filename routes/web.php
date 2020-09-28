<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students',function(){
    // sử dụng query builder
    // lấy ra mảng students
    $students = DB::table('students')->where('id','<',5)->get();
    //;ấy riêng 1 student;
    $student = DB::table('students')-> where('id','=',1) ->first();
    //truyền vào [tên biến view nhận được =>giá trị]
    return view('students.detail',['studentValue'=>$student]);
     
});
//Giá trị truyền vào url sẽ tương ứng vị trí của function
Route::get('/students/{id}/{age}',function($id, $age){
    dd('Gia tri truyen vao tren url: ', $id . '' .$age);
});

Route::get('/students/detail',function(){
    return view('students.detail');
});
//cach 2
// Route::view('/students/detail-2', 'students.detail');
