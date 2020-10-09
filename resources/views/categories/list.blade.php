
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
    <th>name</th>
    <th>image_url</th>
    <th>status</th>
    <th>Số lượng</th>
    
    <th>
    <a href="{{ route('students.create')}}"><button class="btn btn-success">Thêm mới</button></a>

    </th>
</thead>
<tbody>
@foreach($categories as $category)
        <tr>
        <td>{{$category -> name}}</td>
        <td>{{$category -> image_url}}</td>
        <td>{{$category -> status}}</td>
        <td>{{count($category -> posts) }}</td>
        </tr>
@endforeach
<tr><td colspan="2" >{{$categories->links()}}</td></tr>
</tbody>
</table>
@section('footer', 'FOOTER LIST EXTENDS')
@endsection
