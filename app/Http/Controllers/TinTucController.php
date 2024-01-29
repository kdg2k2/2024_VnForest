<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiTinTuc;
use App\TinTuc;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TinTuc::orderByDesc('id')->get();
        return view('admin.tintuc.index', [
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
        $loaitt = LoaiTinTuc::orderByDesc('id')->get();
        return view('admin.tintuc.create', [
            'loaitt' => $loaitt,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new TinTuc();
        $data->id_loaitt = $request->id_loaitt;
        $data->id_user = 1;
        $data->slug = $request->slug;
        $data->tentt = $request->tentt;
        $data->noidung = $request->noidung;
        if (isset($request->path)) {
            $image = $request->file('path');
            $filename = time() . '_avt_' . $image->getClientOriginalName();
            $image->move('tintuc/', $filename);
            $data->path = 'tintuc/' . $filename;
        }
        $data->save();
        return redirect('/admin/tintuc')->with('success', 'Thêm mới thành công');
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
        $loaitt = LoaiTinTuc::orderByDesc('id')->get();
        $data = TinTuc::findOrFail($id);
        return view('admin.tintuc.edit', [
            'loaitt' => $loaitt,
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
        $data = TinTuc::findOrFail($id);
        $data->id_loaitt = $request->id_loaitt;
        $data->id_user = 1;
        $data->slug = $request->slug;
        $data->tentt = $request->tentt;
        $data->noidung = $request->noidung;
        if (isset($request->path)) {
            if(isset($data->path)){
                if (file_exists(public_path($data->path))) {
                    unlink(public_path($data->path));
                }
            }

            $image = $request->file('path');
            $filename = time() . '_avt_' . $image->getClientOriginalName();
            $image->move('tintuc/', $filename);
            $data->path = 'tintuc/' . $filename;
        }
        $data->save();
        return redirect('/admin/tintuc')->with('success', 'Thêm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TinTuc::findOrFail($id);
        if(isset($data->path)){
            if (file_exists(public_path($data->path))) {
                unlink(public_path($data->path));
            }
        }
        $data->delete();
        return redirect('/admin/tintuc')->with('success', 'Xóa thành công');
    }
}
