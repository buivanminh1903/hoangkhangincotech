<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\contactus;

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

<<<<<<< HEAD
        return view ('backend.contactus', compact('title','contactusList'));
=======
        return view ('backend.Contactus.contactus', compact('title','contactusList'));
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3

    }

    public function add(){

        $title = "Thêm người liên hệ";

<<<<<<< HEAD
        return view('backend.contactus-add', compact('title'));
=======
        return view('backend.Contactus.contactus-add', compact('title'));
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3


    }

    public function postAdd(Request $request){
        $request->validate([
            'subject'  => 'required',
            'messages' => 'required',
<<<<<<< HEAD
            'name' => 'required|min:10',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
=======
            'names' => 'required|min:10',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'position' => 'required',
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
        ], 

        [
            'subject.required'=> 'Môn học bắt buộc phải nhập',
            'messages.required' => 'Lời nhắn bắt buộc phải nhập',
            
<<<<<<< HEAD
            'name.required' => 'Họ và tên không được bỏ trống',
            'name.min' => 'Họ và tên phải từ 6 ký tự trở lên',
=======
            'names.required' => 'Họ và tên không được bỏ trống',
            'names.min' => 'Họ và tên phải từ 6 ký tự trở lên',
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3

            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không đúng định dạng ',
            'email.unique' => 'Email đã tồn tại trên hệ thống',

            'phone.required' => 'Số điện thoại bắt buộc phải nhập',
            'phone.regex' => 'Số điện thoại không hợp lệ',
<<<<<<< HEAD
=======

            'position' => 'Vị trí liên hệ không hợp lệ',
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
        ]);

        $dataAdd=$request->all();
        contactus::create($dataAdd);
<<<<<<< HEAD
        return redirect('backend/contactus-add')-> with('msg', 'Thêm người dùng thành công');
=======
        return redirect('backend/Contactus/contactus-add')-> with('msg', 'Thêm người dùng thành công');
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
    }

    public function edit_contactus($id){
        $update = contactus :: find($id);
<<<<<<< HEAD
        return view('backend/contactus-edit',['title'=>'Update contact us']) -> with('update',$update);
=======
        return view('backend/Contactus/contactus-edit',['title'=>'Update contact us']) -> with('update',$update);
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
    }

    public function update(Request $request, $id)
    {
        $update = contactus::find($id);
        $Edit = $request->all();
        $update->update($Edit);
<<<<<<< HEAD
        return redirect('backend/contactus')->with('msg', 'Update người liên hệ thành công');
=======
        return redirect('backend/Contactus/contactus')->with('msg', 'Update người liên hệ thành công');
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
    }

    public function delete($id)
    {
        contactus::destroy($id);
<<<<<<< HEAD
        return redirect('backend/contactus')->with('msg', 'Xóa người liên hệ thành công!');  
=======
        return redirect('backend/Contactus/contactus')->with('msg', 'Xóa người liên hệ thành công!');  
    }

    public function submit(Request $request){
        $request->validate([
            'subject'  => 'required',
            'messages' => 'required',
            'names' => 'required|min:10',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'position' => 'required',
        ], 

        [
            'subject.required'=> 'Môn học bắt buộc phải nhập',
            'messages.required' => 'Lời nhắn bắt buộc phải nhập',
            
            'names.required' => 'Họ và tên không được bỏ trống',
            'names.min' => 'Họ và tên phải từ 6 ký tự trở lên',

            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không đúng định dạng ',
            'email.unique' => 'Email đã tồn tại trên hệ thống',

            'phone.required' => 'Số điện thoại bắt buộc phải nhập',
            'phone.regex' => 'Số điện thoại không hợp lệ',

            'position' => 'Vị trí liên hệ không hợp lệ',
        ]);

        $dataAdd=$request->all();
        contactus::create($dataAdd);
        return redirect('/lien-he')-> with('msg', 'Thêm người dùng thành công');
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3
    }

}