
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
    <th>Student</th>
    <th>Desc</th>
    <th>content</th>
    <th>image_url</th>
    <th>status</th>
    <th>
    <a href="{{ route('students.create')}}"><button class="btn btn-success">Thêm mới</button></a>

    </th>
</thead>
<tbody>
@foreach($posts as $post)
        <tr>
        <td>{{$post->student->name}}</td>
        <td>{{$post -> desc}}</td>
        <td>{{$post -> content}}</td>
        <td><img src="{{ substr($post->image_url, 0, 4) == 'http' ? $post->image_url : asset($post->image_url) }}" height="50" /> </td>
        <td>{{$post -> status}}</td>
        </tr>
@endforeach
<tr><td colspan="2" >{{$posts->links()}}</td></tr>
</tbody>
</table>
@section('footer', 'FOOTER LIST EXTENDS')
@endsection
