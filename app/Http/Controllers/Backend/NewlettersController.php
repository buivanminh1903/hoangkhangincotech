<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\NewLetter;
use Illuminate\Support\Facades\DB;

class NewlettersController extends Controller
{
    private $new_letter;

    public function __construct(){

        $this -> new_letter = new NewLetter();

    }
    // Newletter

    public function index(){  

        $title = 'Newletter List';

        $new_letter_list = $this -> new_letter -> getAllNewletter();

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
      $request -> validate([
            'email' => 'required|email|unique:newletter'
      ], [
        'email.required' => 'Email bắt buộc phải nhập',
        'email.email' => 'Email không đúng định dạng',
        'email.unique' => 'Email đã tồn tại trên hệ thống'
      ]);

      $dataInsert=$request->all();
      Newletter::create($dataInsert);

        return redirect('/backend/NewLetter/newletter-create')->with('msg', 'Thêm email thành công');
    }

    public function emailadd(Request $request){
        $request -> validate([
            'email' => 'required|email|unique:newletter'
      ], [
        'email.required' => 'Email bắt buộc phải nhập',
        'email.email' => 'Email không đúng định dạng',
        'email.unique' => 'Email đã tồn tại trên hệ thống'
      ]);

      $dataInsert=$request->all();
      Newletter::create($dataInsert);

        return redirect('/bai-viet')->with('msg', 'Thêm email thành công');
    }

    public function edit($id){

      $dataEdit = Newletter::find($id);

      return view('backend/NewLetter/newletter-edit', ['title' => 'Edit New Letter'])->with('dataEdit', $dataEdit);
    }

    public function update(Request $request, $id)
    {
        $dataEdit = Newletter::find($id);
        $Edit = $request->all();
        $dataEdit->update($Edit);
        return redirect('backend/NewLetter/newletter')->with('msg', 'Email update thành công');  
    }
    
    public function delete($id)
    {
      Newletter::destroy($id);
        return redirect('backend/NewLetter/newletter')->with('msg', 'Xóa Email thành công!');  
    }

}