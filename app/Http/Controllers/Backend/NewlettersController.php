<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Newletter;
use Illuminate\Support\Facades\DB;

class NewlettersController extends Controller
{
    private $new_letter;

    public function __construct()
    {
        $this->new_letter = new Newletter();
    }

    // Newletter

    public function index()
    {

        $title = 'Newletter List';

        $new_letter_list = $this->new_letter->getAllNewletter();

        return view('backend.NewLetter.newletter', compact('title', 'new_letter_list'));
    }

    // Add Newletter
    public function create()
    {
        $title = 'Add Newletter List';

        return view('backend.NewLetter.newletter-create', compact('title'));
    }

    public function newletter_Create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newletter'
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trên hệ thống'
        ]);

        $dataInsert = $request->all();
        Newletter::create($dataInsert);

        return redirect('/admin/newletter/create')->with('msg', 'Thêm email thành công');
    }

    public function emailadd(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newletter'
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trên hệ thống'
        ]);

        $dataInsert = $request->all();
        Newletter::create($dataInsert);

        // Gửi mail
        $mail = $request->email;
        $name = $request->email;
        Mail::send('email.mailform', compact('mail', 'name'), function ($email) use ($mail, $name) {
            $email->subject('Đăng ký nhận thông tin thành công');
            $email->to($mail, $name);
        });

        return redirect('/bai-viet')->with('success', 'Cảm ơn bạn, đăng ký nhận thông tin thành công, một email đã được gửi đến ' . $mail);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newletter'
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trên hệ thống'
        ]);

        $dataInsert = $request->all();
        Newletter::create($dataInsert);

        // Gửi mail
        $mail = $request->email;
        $name = $request->email;
        Mail::send('email.mailform', compact('mail', 'name'), function ($email) use ($mail, $name) {
            $email->subject('Đăng ký nhận thông tin thành công');
            $email->to($mail, $name);
        });

        return back()->with('success', 'Xin cảm ơn! Một email đã được gửi đến ' . $mail);

    }

    public function edit($id)
    {

        $dataEdit = Newletter::find($id);

        return view('backend.Newletter.newletter-edit', ['title' => 'Edit New Letter'])->with('dataEdit', $dataEdit);
    }

    public function update(Request $request, $id)
    {
        $dataEdit = Newletter::find($id);
        $Edit = $request->all();
        $dataEdit->update($Edit);
        return redirect('/admin/newletter')->with('msg', 'Email update thành công');
    }

    public function delete($id)
    {
        Newletter::destroy($id);
        return redirect('/admin/newletter')->with('msg', 'Xóa Email thành công!');
    }

}
