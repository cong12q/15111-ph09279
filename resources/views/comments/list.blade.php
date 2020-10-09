
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
    <th>content</th>
    <th>student_id</th>
    <th>post_id</th>
    <th>status</th>
    <th>desc</th>
    <th>
    <a href="{{ route('students.create')}}"><button class="btn btn-success">Thêm mới</button></a>

    </th>
</thead>
<tbody>
@foreach($comments as $comment)
        <tr>
        <td>{{$comment->content }}</td>
        <td>{{$comment -> student_id}}</td>
        <td>{{$comment -> post_id}}</td>
        <td>{{$comment -> status}}</td>
        <td>{{$comment -> post -> desc}}</td>
        </tr>
@endforeach
<tr><td colspan="2" >{{$comments->links()}}</td></tr>
</tbody>
</table>
@section('footer', 'FOOTER LIST EXTENDS')
@endsection
