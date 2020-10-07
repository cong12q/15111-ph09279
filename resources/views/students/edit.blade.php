@extends('admin-layout.master')

@section('title','EDIT STUDENT')
@section('content-header','HEADER EDIT')
@section('content')

<form method="POST"
    action="{{ route('students.update', $student->id) }}"
    
>
<!-- Thêm token gửi lên -->
@csrf
<!-- thay đổi phương thức gửi request thành PUT -->
<input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{$student->name}}">
  </div>
  <div class="form-group">
    <label for="phone">phone</label>
    <input id="phone" type="text" class="form-control" name="phone" value="{{$student->phone}}" >
  </div>
  <div class="form-group">
    <label for="age">age</label>
    <input id="age" type="number" class="form-control" name="age" value="{{$student->age}}" >
  </div>
  <div class="form-group">
    <label >Gender</label>
    <input  type="radio" class="form-control" name="gender" value="0" {{$student->gender == 0 ? "checked" : ""}}> 
    <input  type="radio" class="form-control" name="gender" value="1" {{$student->gender == 1 ? "checked" : ""}}>
    <input  type="radio" class="form-control" name="gender" value="2" {{$student->gender == 2 ? "checked" : ""}}>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input id="address" type="text" class="form-control" name="address" value="{{$student->address}}" >
  </div>
  <div class="form-group">
    <label >Status</label>
    <input  type="radio" class="form-control" name="is_active" value="0" {{$student->is_active == 0 ? "checked" : ""}}>
    <input  type="radio" class="form-control" name="is_active" value="1" {{$student->is_active == 1 ? "checked" : ""}}>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection