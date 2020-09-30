@extends('StudentsLayout.LayoutLogin')
@section('title','TITLE LOGIN')
@section('header','HEADER LOGIN')
@section('content')
<body>
    <form action="{{ route('post-login') }}" method="POST">
    @csrf
        <input type="text" name="username" placeholder="usename" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit">Đăng Nhập</button>
    </form>
</body>
@section('footer','FOOTER LOGIN')
@endsection
