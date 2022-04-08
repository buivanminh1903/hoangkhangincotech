<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = DB::table('service')->get();
        return view('backend.service.service', [
            'title' => 'All Service',
            'service' => $service
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
            'title' => 'required|unique:service',
            'image' => 'unique:service',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->move(public_path('image/uploads/service'), $image_name);
            $input['image'] = $image_name;
        }
        Service::create($input);
        return redirect('/backend/service')->with('success', 'Đã Thêm Service!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $service = DB::table('service')
            ->orderByDesc('id')
            ->get();

        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        return view('service', [
            'title' => 'Danh Sách Dịch Vụ',
            'service' => $service,
            'popular_post' => $popular_post
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
        $service = Service::find($id);
        return view('backend.service.service_edit', ['title' => 'Edit Service'])->with('service', $service);
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
        $service = Service::find($id);
        $input = $request->all();
        if ($request->hasFile('image')) {

            $old_image_path = 'image/uploads/service/' . $service->image;
            if (File::exists($old_image_path)) {
                File::delete($old_image_path);
            }

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->move(public_path('image/uploads/service'), $image_name);
            $input['image'] = $image_name;
        }
        $service->update($input);
        return redirect('/backend/service')->with('success', 'Đã cập nhật Service!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = DB::table('service')->find($id);
        $path = 'image/uploads/service/' . $service->image;
        File::delete($path);
        Service::destroy($id);
        return redirect('/backend/service')->with('success', 'Đã Xoá Service!');
    }

    public function detail($id = '', $slug = '')
    {
        $service = DB::table('service')
            ->orderByDesc('id')
            ->get();

        $service_detail = DB::table('service')
            ->where('id', $id)
            ->first();

        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        return view('details_service', [
            'title' => $service_detail->title,
            'service' => $service,
            'service_detail' => $service_detail,
            'popular_post' => $popular_post
        ]);
    }
}
