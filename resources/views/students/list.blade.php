
<body>
<!-- kế thừa view master bằng file StudentsLayout -> master.blade.php -->
@extends('admin-layout.master')
<!-- Thay đổi nội dung đơn giản -->
@section('title','Title LIST extends')

<!-- Thay đổi nội dung phức tạp -->
@section('content-header','HEADER LIST')
@section('content')
<table class="table">
<thead>
    <th>Name</th>
    <th>Phone</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Active</th>
    <th>Action</th>
</thead>
<tbody>
@foreach($StudentsList as $student)
        <tr>
        <td>{{$student -> name}}</td>
        <td>{{$student -> phone}}</td>
        <td>{{$student -> age}}</td>
        <td>
            @if($student->gender == 0)
                'Female'
            @elseif ($student->gender ==1)
                'Male'
            @else 
            'Nothing'
            @endif
        </td>
        <td>{{$student -> address}}</td>
        <td>{{$student -> is_active == 1 ? 'Yes' : 'No'}}</td>
        <td>
        <form action="{{ route('students.destroy', $student->id) }}"
        method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger" type="submit">Xóa</button>
        </form>
        <!-- <a href="{{ route('students.destroy', $student->id) }}"><button>Xóa</button></a> -->

        <a href="{{ route('students.edit', $student->id)}}"><button class="btn btn-primary">Sửa</button></a>
        </td>
        </tr>
@endforeach
</tbody>
</table>
@section('footer', 'FOOTER LIST EXTENDS')
@endsection
