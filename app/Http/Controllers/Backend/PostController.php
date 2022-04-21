<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->orderBy('id', 'desc')
            ->get();

        $post = DB::table('post')
            ->orderByDesc('id')
            ->paginate(5);
        return view('backend.blog.post', [
            'title' => 'Post List', 'post' => $post, 'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'unique:post',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'required',

        ], [
            'image.required' => 'Vui lòng thêm hình ảnh',
            'content.required' => 'Vui lòng nhập nội dung bài viết',
            'title.unique' => 'Tiêu đề đã tồn tại'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->move(public_path('image/uploads/post'), $image_name);
            $input['image'] = $image_name;
        }

        Post::create($input);
        return redirect('/admin/post')->with('success', 'Đã Thêm Bài Đăng!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $categories = DB::table('categories')->orderBy('id', 'desc')->get();

        $post = DB::table('post')
            ->orderByDesc('id')
            ->simplePaginate(10);

        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        $post_total_by_category = DB::table('post')
            ->selectRaw('categories.name, COUNT(*) AS total')
            ->join('categories', 'post.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->get();

        $photolist = DB::table('photos')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        return view('blog', [
            'title' => 'Blog',
            'post' => $post,
            'categories' => $categories,
            'post_total_by_category' => $post_total_by_category,
            'popular_post' => $popular_post,
            'photolist' => $photolist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = DB::table('categories')->orderBy('id', 'desc')->get();
        $post = Post::find($id);
        return view('backend.blog.post_edit', ['title' => 'Edit Post', 'categories' => $categories])->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {

            $old_image_path = 'image/uploads/post/' . $post->image;
            if (File::exists($old_image_path)) {
                File::delete($old_image_path);
            }

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->move(public_path('image/uploads/post'), $image_name);
            $input['image'] = $image_name;
        }

        $post->update($input);
        return redirect('/admin/post/detail/'.$id)->with('success', 'Đã cập nhật bài viết!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = DB::table('post')->find($id);
        $path = 'image/uploads/post/' . $post->image;
        File::delete($path);

        Post::destroy($id);
        return redirect('/admin/post')->with('success', 'Đã Xoá Bài Đăng!');
    }

    public function detail($id = '', $slug = '')
    {
        $recent_post = DB::table('post')
            ->orderByDesc('id')
            ->where('id', '!=', $id)
            ->limit('2')
            ->get();

        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        $post_detail = DB::table('post')
            ->where('id', $id)
            ->first();

        $post_total_by_category = DB::table('post')
            ->selectRaw('categories.name, COUNT(*) AS total')
            ->join('categories', 'post.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->get();

        $photolist = DB::table('photos')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        return view('blog-details', [
            'title' => $post_detail->title,
            'post_detail' => $post_detail,
            'recent_post' => $recent_post,
            'post_total_by_category' => $post_total_by_category,
            'popular_post' => $popular_post,
            'photolist' => $photolist
        ]);
    }

    public function search()
    {
        $key = $_GET['key'];
        $post = DB::table('post')
            ->where('title', 'LIKE', '%' . $key . '%')
            ->get();

        $result_total = DB::table('post')
            ->select(DB::raw('COUNT(*) AS total'))
            ->where('title', 'LIKE', '%' . $key . '%')
            ->get();

        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        $post_total_by_category = DB::table('post')
            ->selectRaw('categories.name, COUNT(*) AS total')
            ->join('categories', 'post.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->get();

        return view('search', [
            'title' => 'Kết quả tìm kiếm cho "' . $key . '"',
            'post' => $post,
            'post_total_by_category' => $post_total_by_category,
            'key' => $key,
            'result_total' => $result_total,
            'popular_post' => $popular_post
        ]);
    }

    public function backend_detail($id = '')
    {
        $post_detail = DB::table('post')
            ->join('categories', 'post.category_id', 'categories.id')
            ->select('post.id AS post_id', 'title', 'short_content', 'content', 'image', 'categories.name AS category_name', 'post.created_at AS post_created_at')
            ->where('post.id', $id)
            ->first();

        $categories = DB::table('categories')
            ->orderBy('id', 'desc')
            ->get();

        return view('backend.blog.post_detail', [
            'title' => $post_detail->title,
            'post_detail' => $post_detail,
            'categories' => $categories
        ]);
    }

    public function backend_search()
    {
        $key = $_GET['key'];

        $categories = DB::table('categories')
            ->orderBy('id', 'desc')
            ->get();

        $post = DB::table('post')
            ->where('title', 'LIKE', '%' . $key . '%')
            ->get();

        $result_total = DB::table('post')
            ->select(DB::raw('COUNT(*) AS total'))
            ->where('title', 'LIKE', '%' . $key . '%')
            ->get();

        return view('backend.blog.post_search', [
            'title' => 'Kết quả tìm kiếm cho "' . $key . '"',
            'post' => $post,
            'key' => $key,
            'result_total' => $result_total,
            'categories' => $categories
        ]);
    }
}
