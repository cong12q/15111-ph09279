<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index() sử dụng phương thức get
    public function index()
    {
        $student = Student::all(); // lấy ra hết
        //hoặc $student =Student::orderBy('id','desc')->get();
        return view('students.list',['StudentsList'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // create() sử dụng phương thức get route name students.create
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // show() sử dụng phương thức get Route name là students.show
    public function show($student)
    {
        //Nếu chỉ chuyền vào $student thì sẽ nhận được id cho Student
        // còn nếu truyền vào Student $student thì sẽ truy vaanstimf student có id=$student
        $studentObjEloquentModel = Student::find($student);
        $studentObjQueryBuiler = DB::table('students')->find($student);
        $studentObj = $student;
        dd($studentObjEloquentModel->name, $studentObjQueryBuiler->name);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
