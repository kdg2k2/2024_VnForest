<?php

namespace App\Http\Controllers;

use App\GioiThieuChung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GioiThieuController extends Controller
{
    public function editGtc(){
        $data = GioiThieuChung::findOrFail(1);
        return view('admin.gioithieu.gtc.edit', [
            'data' => $data
        ]);
    }

    public function updateGtc(Request $request){
        $data = GioiThieuChung::findOrFail(1);
        $data->tieude = $request->tieude;
        $data->noidung = $request->noidung;
        $data->save();
        return redirect('/admin/gioithieu/gtc/edit');
    }

}
