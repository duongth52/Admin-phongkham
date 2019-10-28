<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
class AdminLoginController extends Controller
{

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin() {
        return view('signin');
    }

    public function postLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // The user is active, not suspended, and exists.
            return redirect()->route('admin.dashboard')->with('message', 'dang nhap thanh cong');
        }
        return redirect()->route('getLogin')->with('fail', 'khong dung mk or sai email');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('getLogin')->with('message', 'dang xuat thanh cong');
    }

    public function getadd(){
      return view('adduser');
    }

    public function posttadd(Request $request){
     $dataInsert = new User;
     $dataInsert->name = $request->name;
     $dataInsert->email = $request->email;
     $dataInsert->password = Hash::make($request->password);

     if ($dataInsert->save()) {
      return redirect()->back()->with('message', 'Thêm thành công');
    }
    else{
      return view('admin.page.login')->with('fail', 'Thêm mới thất bại');
    }
   }
}
