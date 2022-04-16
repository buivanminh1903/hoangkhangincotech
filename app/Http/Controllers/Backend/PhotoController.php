<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Photo;

class PhotoController extends Controller
{
    private $photo;

    public function __construct(){

        $this -> photo = new Photo();

    }

    public function index()
    {
        $title = 'Photo List';

        $photolist = $this -> photo -> getAllPhoto();

        return view('backend.Photo.photo', compact('title', 'photolist'));
    }

    public function create()
    {
        $title = 'Add Photo List';

        return view('backend.Photo.photo-create', compact('title'));
    }

    public function photo_Create(Request $request)
    {
      $request -> validate([
            'title' => 'required|unique:photos',
            'images' => 'required|unique:photos'
      ], [
        'title.required' => 'Title bắt buộc phải nhập',
        'title.unique' => 'Title đã tồn tại trên hệ thống',
        'images.required' => 'Bạn chưa có hình ',
        'images.unique' => 'Hình đã tồn tại trên hệ thống'

      ]);

        $dataInsert = $request->all();
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $image_name = $image->getClientOriginalName();

            $request->file('images')->move(public_path('image/uploads/photo_blog'), $image_name);
            $dataInsert['images'] = $image_name;
        }

        Photo::create($dataInsert);
        return redirect('/admin/photo')->with('msg', 'Thêm hình ảnh thành công');

    }

    public function edit($id){

        $dataEdit = Photo::find($id);


        return view('backend/Photo/photo-edit', ['title' => 'Edit Photo'])->with('dataEdit', $dataEdit);

    }

      public function update(Request $request, $id){

        $dataEdit = Photo::find($id);
        $edit = $request->all();

        if ($request->hasFile('images')) {

            $image_path = 'image/uploads/photo_blog/'.$dataEdit->images;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $image = $request->file('images');
            $image_name = $image->getClientOriginalName();
            $request->file('images')->move(public_path('image/uploads/photo_blog'), $image_name);
            $edit['images'] = $image_name;
        }

        $dataEdit->update($edit);

        return redirect('/admin/photo')->with('msg', 'Update photo thành công');

    }

    public function delete($id)
    {

        $photo= DB::table('photos') ->find($id);
        $path ='image/uploads/photo_blog/' .$photo->images;
        File::delete($path);

        Photo::destroy($id);
        return redirect('/admin/photo')->with('msg', 'Xóa hình ảnh thành công!');  
    }

    public function photoshow (){
    
        $photolist = DB::table('photos')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

            return view('blog', [
                'title' => 'Blog',
                'photolist' => $photolist
            ]);
    }
}

 

