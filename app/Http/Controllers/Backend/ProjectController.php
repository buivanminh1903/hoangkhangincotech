<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ourprojectModel;
use Faker\Core\File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //xuất danh sách chi tiết ourproject
        $our_project = ourprojectModel::all();
        return view('backend.Project.ourproject', [
            'our_project' => $our_project,
            'title' => 'Our ProJect'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return  view('backend.Project.ourproject_create',
                ['title' => 'insert_project']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $image_name = $image->getClientOriginalName();
            $request->file('images')->move(public_path('image/uploads/ourproject'), $image_name);
            $input['images'] = $image_name;
        }
        ourprojectModel::create($input);

        return redirect('admin/ourproject')->with('succress','đã thêm Our Project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    /**
     show danh mục theo limit
     */

    public function showdm(){

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $our_project = ourprojectModel::find($id);
        return view('backend.Project.ourproject_edit', [
            'title' => 'Sửa'
        ])->with('our_project', $our_project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $our_project = ourprojectModel::find($id);
        $input = $request->all();
        if ($request->hasFile('images')) {
            $old_image_path = 'image/uploads/ourproject/'.$our_project ->images;
            if (\Illuminate\Support\Facades\File::exists($old_image_path)){
                \Illuminate\Support\Facades\File::delete($old_image_path);
            }
            $image = $request->file('images');
            $image_name = $image->getClientOriginalName();
            $request->file('images')->move(public_path('image/uploads/ourproject'), $image_name);
            $input['images'] = $image_name;
        }
        $our_project->update($input);
        return redirect('admin/ourproject')->with('success', 'Đã cập nhật!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ourprojectModel::destroy($id);
        return redirect('admin/ourproject')->with('success', 'Đã xoá dịch vụ!');
    }
}
