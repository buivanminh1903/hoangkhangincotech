<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\reviews;

class ReviewsController extends Controller
{
   private $reviews;

   public function __construct()
   {
     $this->reviews = new reviews();

   }
    
    public function index()
    {
        $title = "Danh sách Reviewer";

       
        $reviewsList = $this->reviews->getAllReviews();

        // $contactus = DB::select('SELECT * FROM contactus');

        return view ('backend.Review.reviews', compact('title','reviewsList'));

    }
    public function add(){

      $title = "Thêm Reviews";

      return view('backend.Review.reviews-add', compact('title'));


  }

  public function postAdd(Request $request){
      $request->validate([
          'names' => 'required|min:10',
          'star' => 'required|regex:/[1-5]{1}/',
          'content'  => 'required',
          'position' => 'required',
          'image' => 'required',
          
      ], 

      [
          'content.required'=> 'Môn học bắt buộc phải nhập',
          'position.required' => 'Lời nhắn bắt buộc phải nhập',
          'names.required' => 'Họ và tên không được bỏ trống',
          'names.min' => 'Họ và tên phải từ 6 ký tự trở lên',
          'image.required' => 'Email không được bỏ trống',
          'star.required' => 'Số điện thoại bắt buộc phải nhập',
          'star.regex' => 'Số điện thoại không hợp lệ',
      ]);

      $dataAdd=$request->all();
      reviews::create($dataAdd);
      return redirect('backend/Review/reviews-add')-> with('msg', 'Thêm người dùng thành công');
  }
  public function edit_reviews($id){
    $update = reviews :: find($id);
    return view('backend/Review/reviews-edit',['title'=>'Update contact us']) -> with('update',$update);
}

public function update(Request $request, $id)
{
    $update = reviews::find($id);
    $Edit = $request->all();
    $update->update($Edit);
    return redirect('backend/Review/reviews')->with('msg', 'Update người liên hệ thành công');
}

public function delete($id)
{
  reviews::destroy($id);
    return redirect('backend/Review/reviews')->with('msg', 'Xóa người liên hệ thành công!');  
}

}