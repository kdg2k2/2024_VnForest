<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;
use App\LoaiVanBan;
use App\VanBan;
use Illuminate\Support\Facades\Storage;

class VanBanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VanBan::orderByDesc('id')->get();
        return view('admin.vanban.index', [
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
        $linhvuc = LinhVuc::orderByDesc('id')->get();
        $loaivb = LoaiVanBan::orderByDesc('id')->get();
        return view('admin.vanban.create', [
            'linhvuc' => $linhvuc,
            'loaivb' => $loaivb,
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
        $data = new VanBan();
        $data->id_loaivb = $request->id_loaivb;
        $data->id_linhvuc = $request->id_linhvuc;
        $data->id_user = 1;
        $data->slug = $request->slug;
        $data->tenvb = $request->tenvb;
        $data->sohieu = $request->sohieu;
        $data->namphathanh = $request->namphathanh;
        $data->donviphathanh = $request->donviphathanh;
        if (isset($request->path)) {
            $file = $request->file('path');
            $filename = $request->namphathanh.'_'.LoaiVanBan::findOrFail($request->id_loaivb)->tenloaivb . '_' . Linhvuc::findOrFail($request->id_linhvuc)->tenlinhvuc . '_' . $file->getClientOriginalName();
            $file->storeAs('VanBan/', $filename);
            $filePath = 'VanBan/' . $filename;
            $data->path = $filePath;
        }
        $data->save();

        return redirect('/admin/vanban')->with('success', 'Thêm mới thành công');
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
        $linhvuc = LinhVuc::orderByDesc('id')->get();
        $loaivb = LoaiVanBan::orderByDesc('id')->get();
        $data = VanBan::findOrFail($id);
        return view('admin.vanban.edit', [
            'linhvuc' => $linhvuc,
            'loaivb' => $loaivb,
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
        $data = VanBan::findOrFail($id);
        $data->id_loaivb = $request->id_loaivb;
        $data->id_linhvuc = $request->id_linhvuc;
        $data->id_user = 1;
        $data->slug = $request->slug;
        $data->tenvb = $request->tenvb;
        $data->sohieu = $request->sohieu;
        $data->namphathanh = $request->namphathanh;
        $data->donviphathanh = $request->donviphathanh;
        if (isset($request->path)) {
            if (Storage::disk('local')->exists($data->path)) {
                Storage::disk('local')->delete($data->path);
            }

            $file = $request->file('path');
            $filename = $request->namphathanh.'_'.LoaiVanBan::findOrFail($request->id_loaivb)->tenloaivb . '_' . Linhvuc::findOrFail($request->id_linhvuc)->tenlinhvuc . '_' . $file->getClientOriginalName();
            $file->storeAs('VanBan/', $filename);
            $filePath = 'VanBan/' . $filename;
            $data->path = $filePath;
        }
        $data->save();

        return redirect('/admin/vanban')->with('success', 'Thêm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = VanBan::findOrFail($id);
        if (Storage::disk('local')->exists($data->path)) {
            Storage::disk('local')->delete($data->path);
        }

        $data->delete();
        return redirect('/admin/vanban')->with('success', 'Xóa thành công');
    }
}
