@extends('StudentsLayout.LayoutLogin')
@section('title','TITLE LOGIN')
@section('header', 'HEADER LOGIN')
@section('content')
    <form action="{{ route('post-login') }}" method="POST">
    @csrf
        <input type="text" name="username" placeholder="usename" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit">Đăng Nhập</button>
    </form>
@section('footer','FOOTER LOGIN')
@endsection