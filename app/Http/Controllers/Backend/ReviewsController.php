<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
          'names' => 'required|min:6',
          'star' => 'required|regex:/[1-5]{1}/',
          'content'  => 'required',
          'position' => 'required',
          'image' => 'required',
          
      ], 

      [
          'content.required'=> 'Nội Dung bắt buộc phải nhập',
          'position.required' => 'Chức Vị bắt buộc phải nhập',
          'names.required' => 'Họ và tên không được bỏ trống',
          'names.min' => 'Họ và tên phải từ 6 ký tự trở lên',
          'image.required' => 'Hình ảnh không được bỏ trống',
          'star.required' => 'Số sao đánh giá bắt buộc phải nhập',
          'star.regex' => 'Số sao không hợp lệ',
      ]);

      $dataAdd = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();

            $request->file('image')->move(public_path('image/uploads/reviews'), $image_name);
            $dataAdd['image'] = $image_name;
        }

      reviews::create($dataAdd);
      return redirect('admin/reviews/add')-> with('msg', 'Thêm đánh giá công');
  }
  public function edit_reviews($id){
    $update = reviews :: find($id);
    return view('backend.Review.reviews-edit',['title'=>'Update Reviews']) -> with('update',$update);
}

public function update(Request $request, $id)
{
    $update = reviews::find($id);
    $edit = $request->all();

    if ($request->hasFile('image')) {
        $image_path = 'image/uploads/reviews/'.$update->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $request->file('image')->move(public_path('image/uploads/reviews'), $image_name);
        $edit['image'] = $image_name;
    }
    $update->update($edit);
    return redirect('admin/reviews')->with('msg', 'Update đánh giá thành công');
}

public function delete($id)
{
    $photo= DB::table('reviews') ->find($id);
    $path ='image/uploads/reviews/' .$photo->image;
    File::delete($path);
  reviews::destroy($id);
    return redirect('admin/reviews')->with('msg', 'Xóa đánh giá thành công!');  
}


}