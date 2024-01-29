<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiTinTuc;

class LoaiTinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoaiTinTuc::orderByDesc('id')->get();
        return view('admin.loaitintuc.index',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaitintuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new LoaiTinTuc();
        $data->tenloaitt = $request->tenloaitt;
        $data->slug = $request->slug;
        $data->save();
        return redirect('/admin/loaitt')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LoaiTinTuc::findOrFail($id);
        return view('admin.loaitintuc.edit', [
            'data' => $data,
        ]);
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
        $data = LoaiTinTuc::findOrFail($id);
        $data->tenloaitt = $request->tenloaitt;
        $data->slug = $request->slug;
        $data->save();
        return redirect('/admin/loaitt')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LoaiTinTuc::findOrFail($id)->delete();
        return redirect('/admin/loaitt')->with('success', 'Xóa thành công');
    }
}
