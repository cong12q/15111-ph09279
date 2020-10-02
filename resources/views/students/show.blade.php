
<body>
<!-- kế thừa view master bằng file StudentsLayout -> master.blade.php -->
@extends('admin-layout.master')
<!-- Thay đổi nội dung đơn giản -->
@section('title','Title LIST extends')

<!-- Thay đổi nội dung phức tạp -->

@section('content')
<table class="table">
<thead>
    <th>Name</th>
    <th>Phone</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Active</th>
</thead>
<tbody>
        <tr>
        <td>{{$StudentsShow -> name}}</td>
        <td>{{$StudentsShow -> phone}}</td>
        <td>{{$StudentsShow -> age}}</td>
        <td>
            @if($StudentsShow->gender == 0)
                'Female'
            @elseif ($StudentsShow->gender ==1)
                'Male'
            @else 
            'Nothing'
            @endif
        </td>
        <td>{{$StudentsShow -> address}}</td>
        <td>{{$StudentsShow -> is_active == 1 ? 'Yes' : 'No'}}</td>

        </tr>
</tbody>
</table>
@section('footer', 'FOOTER LIST EXTENDS')
@endsection
