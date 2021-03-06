<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\contactus;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    private $contactus;

    public function __construct()
    {
        $this->contactus = new contactus();

    }

    public function index()
    {
        $title = "Danh sách người liên hệ";


        $contactusList = $this->contactus->getAllContactus();

        // $contactus = DB::select('SELECT * FROM contactus');


        return view('backend.Contactus.contactus', compact('title', 'contactusList'));


    }

    public function add()
    {

        $title = "Thêm người liên hệ";


        return view('backend.Contactus.contactus-add', compact('title'));


    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'messages' => 'required',
            'names' => 'required',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'position' => 'required',
        ],

            [
                'subject.required' => 'Môn học bắt buộc phải nhập',
                'messages.required' => 'Lời nhắn bắt buộc phải nhập',


                'names.required' => 'Họ và tên không được bỏ trống',


                'email.required' => 'Email không được bỏ trống',
                'email.email' => 'Email không đúng định dạng ',
                'email.unique' => 'Email đã tồn tại trên hệ thống',

                'phone.required' => 'Số điện thoại chỉ được nhập số',
                'phone.regex' => 'Số điện thoại không hợp lệ',


                'position' => 'Vị trí liên hệ không hợp lệ',

            ]);

        $dataAdd = $request->all();
        contactus::create($dataAdd);


        return redirect('/admin/contactus/add')->with('msg', 'Thêm người dùng thành công');

    }

    public function edit_contactus($id)
    {
        $update = contactus:: find($id);


        return view('backend.Contactus.contactus-edit', ['title' => 'Update contact us'])->with('update', $update);

    }

    public function update(Request $request, $id)
    {
        $update = contactus::find($id);
        $Edit = $request->all();
        $update->update($Edit);


        return redirect('/admin/contactus')->with('msg', 'Update người liên hệ thành công');
    }

    public function delete($id)
    {
        contactus::destroy($id);


        return redirect('/admin/contactus')->with('msg', 'Xóa người liên hệ thành công!');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'messages' => 'required',
            'names' => 'required',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'position' => 'min:4',

        ],

            [
                'subject.required' => 'Vui lòng nhập chủ đề',
                'messages.required' => 'Vui lòng nhập lời nhắn',

                'names.required' => 'Họ và tên không được bỏ trống',

                'email.required' => 'Email không được bỏ trống',
                'email.email' => 'Email không đúng định dạng ',
                'email.unique' => 'Email đã tồn tại trên hệ thống',

                'phone.required' => 'Số điện thoại bắt buộc phải nhập',
                'phone.regex' => 'Số điện thoại không hợp lệ',

                'position.min' => 'Vui lòng chọn vị trí công việc của bạn'
            ]);

        $dataAdd = $request->all();
        //contactus::create($dataAdd);

        // Gửi mail
        $mail = $request->email;
        $name = $request->names;
        Mail::send('email.contactus-mailform', compact('mail', 'name', 'request'), function ($email) use ($mail, $name) {
            $email->subject('Đăng ký nhận thông tin thành công');
            $email->to($mail, $name);
        });

        return redirect('/lien-he')->with('msg', 'Cảm ơn bạn, đăng ký thành công! một email đã được gửi đến ' . $mail);

    }

}
