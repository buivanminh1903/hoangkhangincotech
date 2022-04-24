<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class MainController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    function save(Request $request)
    {

        //Validate requests
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12'
        ]);

        //Insert date into database
        $admin = new admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'Tạo tài khoản thành công, mời ');
        } else {
            return back()->with('fail', 'Lỗi, vui lòng thử lại!');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'Chúng tôi không tìm thấy địa chỉ email của bạn')->withInput();
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                Session::put('user_name', $userInfo->name);
                Session::put('user_img', $userInfo->img);
                return redirect('admin/');

            } else {
                return back()->with('fail', 'Vui lòng kiểm tra lại mật khẩu')->withInput();
            }
        }
    }

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/admin/login');
        }
    }

    function dashboard()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.home', $data, ['title' => 'Dashboard']);
    }

    public function edit()
    {
        return view('auth.edit', [
            'title' => 'Edit'
        ]);
    }
}
