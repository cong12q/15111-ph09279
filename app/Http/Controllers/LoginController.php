<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
public function index()
  {
      // lấy thông tin user đang đăng nhập
      if(Auth::check()){
          return redirect()->route('students.index');
      }
    return view('login');
  }

  // ham xu ly login
  public function postLogin(Request $request)
  {
      //user auth
      $data =$request->only('email','password');
      //kiem tra login su dung AUTH
      if(Auth::attempt($data)){
          return redirect()->route('students.index');
      }
      return redirect()->route('get-login');
      
  }
  public function logout()
  {
      Auth::logout();
      return redirect()->route('get-login');
  }
}
