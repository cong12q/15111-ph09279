@extends('admin-layout.master')

@section('title','EDIT STUDENT')
@section('content-header','HEADER EDIT')
@section('content')

<form method="POST"
    action="{{ route('students.store')}}"
    
>
<!-- Thêm token gửi lên -->
@csrf
<!-- thay đổi phương thức gửi request thành PUT -->
  <div class="form-group">
    <label for="name">name</label>
    <input id="name" type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="phone">phone</label>
    <input id="phone" type="text" class="form-control" name="phone"  >
  </div>
  <div class="form-group">
    <label for="age">age</label>
    <input id="age" type="number" class="form-control" name="age" >
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input id="address" type="text" class="form-control" name="address"  >
  </div>
  <div class="form-group">
    <label >Gender</label> <br>
    Nu
    <input  type="radio" class="form-control" name="gender" value="0" >
    Nam
    <input  type="radio" class="form-control" name="gender" value="1"> 
    Khong xac dinh
    <input  type="radio" class="form-control" name="gender" value="2">
  </div>
  <div class="form-group">
    <label >Status</label><br>
    No
    <input  type="radio" class="form-control" name="is_active" value="1">
    Yes
    <input  type="radio" class="form-control" name="is_active" value="2">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection