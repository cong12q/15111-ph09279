<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;


//use Request de nhan giu lieu tren request
use Illuminate\Http\Request;


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
Route::get('login', [LoginController::class, 'index'])->name('get-login');

Route::post('post-login', [LoginController::class, 'postLogin'])->name('post-login');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});
// Tạo Route resource cho students controller
Route::resource('students', StudentController::class)
        // ->middleware('auth')
        // ->only(['index']) khi chỉ dùng hàm nào đó
        // ->except(['index]) khi cần bỏ qua hàm nào đó
;
// Tạo Route cho subject controoler không dùng resoure
Route::get('/subjects', [subjectController::class, 'index'])->name('subjects.index');

//post
Route::resource('posts', PostController::class);
//category
Route::resource('categories', CategoryController::class);
//comment
Route::resource('comments', CommentController::class);

Route::get('/post',function(){
    $posts = Post::all(); // lấy ra hết
    //hoặc $student =Student::orderBy('id','desc')->get();
    $posts = Post::paginate(5); //lay ra ds co phan trang
    return view('posts.list',['posts'=>$posts]);
    
    // $comment = \App\Models\Comment::find(1);
    // dd($comment->post);
});

//edit
// Route::get('/students',function(){
//     // sử dụng query builder
//     // lấy ra mảng students
//     // get tra ve arr
//     $students = DB::table('students')->where('id','<',5)->get();
//     //;ấy riêng 1 student;
//     //first tra ve oject
//     $student = DB::table('students')-> where('id','=',1) ->first();
//     //truyền vào [tên biến view nhận được =>giá trị]
//     return view('students.detail',['studentValue'=>$student]);
     
// });
// //Giá trị truyền vào url sẽ tương ứng vị trí của function
// Route::get('/students/{id}/{age}',function($id, $age){
//     dd('Gia tri truyen vao tren url: ', $id . '' .$age);
// });

// Route::get('/students/detail',function(){
//     return view('students.detail');
// });
// //cach 2
// // Route::view('/students/detail-2', 'students.detail');
// Route::get('/students/list',function(){
//     //truy vấn lấy danh sách student bằng query builer
//     $student=DB::table('students')->orderBy('id','desc')->get();
//     return view('students.list',['StudentsList'=>$student]);
// })->name('student-list');

// // chức năng login và Route POST
// Route::get('/login',function(){
//     return view('login');
// })->name('get-login');

// Route::post('/post-login',function(Request $request){
//     // sử dụng request->all() hoặc #request->input name
//     // dd($request->all());
//     //thực hiện truy vấn theo giá trị vừa gửi lên
//     $username = $request ->username;
//     $student=DB::table('students')
//     ->where('name','like',"%$username%")
//     ->first();
// // nếu có stdent thì sẽ redirect sang student-list
//     if ($student) {
//         return redirect()->route('student-list');
//     }
//     // nếu không thì quay lại màn login
//     return redirect()->route('get-login');
// })->name('post-login');

// Route::get('/admin',function(){
//     return view('testadmin');
// })