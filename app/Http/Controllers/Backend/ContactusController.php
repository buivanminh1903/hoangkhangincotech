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

        return view ('backend.contactus', compact('title','contactusList'));

    }

    public function add(){

        $title = "Thêm người liên hệ";

        return view('backend.contactus-add', compact('title'));


    }

    public function postAdd(Request $request){
        $request->validate([
            'subject'  => 'required',
            'messages' => 'required',
            'name' => 'required|min:10',
            'email' => 'required|email|unique:contactus',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
        ], 

        [
            'subject.required'=> 'Môn học bắt buộc phải nhập',
            'messages.required' => 'Lời nhắn bắt buộc phải nhập',
            
            'name.required' => 'Họ và tên không được bỏ trống',
            'name.min' => 'Họ và tên phải từ 6 ký tự trở lên',

            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không đúng định dạng ',
            'email.unique' => 'Email đã tồn tại trên hệ thống',

            'phone.required' => 'Số điện thoại bắt buộc phải nhập',
            'phone.regex' => 'Số điện thoại không hợp lệ',
        ]);

        $dataAdd=$request->all();
        contactus::create($dataAdd);
        return redirect('backend/contactus-add')-> with('msg', 'Thêm người dùng thành công');
    }

    public function edit_contactus($id){
        $update = contactus :: find($id);
        return view('backend/contactus-edit',['title'=>'Update contact us']) -> with('update',$update);
    }

    public function update(Request $request, $id)
    {
        $update = contactus::find($id);
        $Edit = $request->all();
        $update->update($Edit);
        return redirect('backend/contactus')->with('msg', 'Update người liên hệ thành công');
    }

    public function delete($id)
    {
        contactus::destroy($id);
        return redirect('backend/contactus')->with('msg', 'Xóa người liên hệ thành công!');  
    }

}