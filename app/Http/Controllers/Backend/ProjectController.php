<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ourprojectModel;
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
        return view('backend.ourproject', [
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
            return  view('backend.ourproject_create',
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
        ourprojectModel::create($input);

        return redirect('backend/ourproject')->with('succress','đã thêm Our Project');
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
        return view('backend.ourproject_edit', [
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
        $our_project->update($input);
        return redirect('backend/ourproject')->with('success', 'Đã cập nhật!');
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
        return redirect('backend/ourproject')->with('success', 'Đã xoá dịch vụ!');
    }
}
