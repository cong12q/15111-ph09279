<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function _construct(){
        $this->middleware('Auth');
    }
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
        $student = Student::paginate(5); //lay ra ds co phan trang
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
        return view('students.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->phone = $request->input('phone');
        $student->age = $request->input('age');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->is_active = $request->input('is_active');

        // thực hiện gọi phương thức save() để lưu
        $student->save();
        return redirect()->route('students.index');
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
        // $studentObjQueryBuiler = DB::table('students')->find($student);
        // $studentObj = $student;
        return view('students.show',['StudentsShow'=>$studentObjEloquentModel]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
       return view('students.edit', ['student'=>$student]);
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
        // dd($request -> all());
        // Gán giá trị mới cho các thuộc tính của student dữ liệu
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->is_active = $request->is_active;
        // thực hiện gọi phương thức save() để lưu
        $student->save();
        return redirect()->route('students.index');

        // cách 2: $student->update(['name'=> $request->name])
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //kiểm tra tồn tại sinh viên mới tiến hành xóa
        if ($student) {
            $student->delete(); //(Trả về True or False)

            //cách 2: Student::destroy($student->id)  (Trả về số lượng bản ghi bị xóa)
        }
        //redirect về danh sách có thực hiện về danh sách mới
        return redirect()->route('students.index');
    }
}
