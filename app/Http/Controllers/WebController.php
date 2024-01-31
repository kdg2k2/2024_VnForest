<?php

namespace App\Http\Controllers;

use App\GioiThieuChung;
use App\LinhVuc;
use App\LoaiTinTuc;
use App\LoaiVanBan;
use App\TinTuc;
use App\VanBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function getHome()
    {
        $tinsukien = TinTuc::whereIn('id_loaitt', [2,3,4,5])->limit(10)->get();
        $tainguyenrung = TinTuc::whereIn('id_loaitt', [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30])->limit(6)->get();
        $chuyendoiso = TinTuc::where('id_loaitt', 32)->limit(10)->get();
        $chidaodieuhanh = VanBan::where('id_loaivb', 9)->limit(4)->get();
        $tintuyendung = TinTuc::where('id_loaitt', 6)->limit(4)->get();

        return view('pages.home.home',[
            'tinsukien' => $tinsukien,
            'tainguyenrung' => $tainguyenrung,
            'chuyendoiso' => $chuyendoiso,
            'chidaodieuhanh' => $chidaodieuhanh,
            'tintuyendung' => $tintuyendung,
        ]);
    }

    public function getGtc(){
        $data = GioiThieuChung::findOrFail(1);
        return view('pages.gioithieu.gtc', [
            'data' => $data,
        ]);
    }

    public function getTintuc()
    {
        $data = TinTuc::orderBy('id')->paginate(5);
        return view('pages.tintuc.tintuc', [
            'data' => $data,
        ]);
    }

    public function getXemtin($slug)
    {
        $data = TinTuc::where('slug', $slug)->first();
        return view('pages.tintuc.xemtin', [
            'data' => $data,
        ]);
    }

    public function getVanban(Request $request)
    {
        $key = explode('/', $request->path());
        $id_loaivb = LoaiVanBan::where('slug', $key[1])->first()->id;
        if($id_loaivb){
            $data = VanBan::where('id_loaivb', $id_loaivb)->orderBy('id')->paginate(10);
            return view('pages.vanban.vanban', [
                'data' => $data,
            ]);
        }else{
            return 'Không tìm thấy loại văn bản';
        }
    }

    public function getXemVanban($slug)
    {
        $data = VanBan::where('slug', $slug)->first();
        return view('pages.vanban.xemvanban', [
            'data' => $data,
        ]);
    }

    public function getDownloadVanBan($slug)
    {
        $file = Vanban::where('slug', $slug)->first();
        $path = storage_path('app/' . $file->path);
        if (file_exists($path)) {
            return response()->download($path);
        } else {
            abort(404);
        }
    }

    public function getViewVanBan($slug)
    {
        $file = Vanban::where('slug', $slug)->first();
        $path = storage_path('app/' . $file->path);

        $name = explode('/', $path);
        if (file_exists($path)) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext == 'pdf') {
                return Response::make(file_get_contents($path), 200, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $file->path . '"'
                ]);
            } elseif ($ext == 'doc' || $ext == 'docx' || $ext == 'xls' || $ext == 'xlsx') {
                $filename_clone = $name[2] . "." . $ext;
                File::makeDirectory(public_path('vanban'), $mode = 0777, true, true);
                $clone = public_path("vanban/$filename_clone");
                File::copy($path, $clone);
                $url = 'https://view.officeapps.live.com/op/embed.aspx?src=http:127.0.0.1:8000/vanban/' . $filename_clone . '&embedded=true';
                return redirect($url);
            } else {
                echo "File " . $name[2] . " không hỗ trợ xem trực tiếp. Vui lòng tải về.";
            }
        } else {
            echo "File " . $name[2] . " không tồn tại trong hệ thống.";
        }
    }

    public function getSearchVanBan(Request $request)
    {
        $linhvuc = LinhVuc::orderByDesc('id')->get();
        $loaivb = LoaiVanBan::orderByDesc('id')->get();

        $id_linhvuc = 0;
        $id_loaivb = 0;
        $nam = 0;
        $keyword = '';

        if ($request->linhvuc != null || $request->loaivb != null || $request->namphathanh != null) {
            $q = VanBan::orderByDesc('id');
            if ($request->linhvuc != null) {
                $q->where('id_linhvuc', $request->linhvuc);
                $id_linhvuc = $request->linhvuc;
            }
            if ($request->loaivb != null) {
                $q->where('id_loaivb', $request->loaivb);
                $id_loaivb = $request->loaivb;
            }
            if ($request->namphathanh != null) {
                $q->where('namphathanh', $request->namphathanh);
                $nam = $request->namphathanh;
            }
            if ($request->keyword != null) {
                $q->where('tenvb', 'like', '%'.$request->keyword.'%')->orWhere('sohieu', 'like', '%'.$request->keyword.'%');
                $keyword = $request->keyword;
            }
            $data  = $q->paginate(10);
        } else {
            $data = VanBan::orderByDesc('id')->paginate(10);
        }

        return view('pages.vanban.search', [
            'data' => $data,
            'linhvuc' => $linhvuc,
            'loaivb' => $loaivb,
            'id_linhvuc' => $id_linhvuc,
            'id_loaivb' => $id_loaivb,
            'nam' => $nam,
            'keyword' => $keyword,
        ]);
    }
}
