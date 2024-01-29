<?php

namespace App\Http\Controllers;

use App\TinTuc;
use App\VanBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function getHome()
    {
        return view('pages.home.home');
    }

    public function getTintuc()
    {
        $data = TinTuc::orderBy('id')->paginate(5);
        return view('pages.tintuc.tintuc', [
            'data' => $data,
        ]);
    }

    public function getXemtin()
    {
        return view('pages.tintuc.xemtin');
    }

    public function getVanban()
    {
        $data = VanBan::orderBy('id')->paginate(10);
        return view('pages.vanban.vanban', [
            'data' => $data,
        ]);
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
        if(file_exists($path)){
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
        if (Storage::disk('local')->exists($path)) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext == 'pdf') {
                return Response::make(file_get_contents($path), 200, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $path . '"'
                ]);
            } else if ($ext == 'doc' || $ext == 'xls' || $ext == 'docx' || $ext == 'xlsx') {
                // Sử dụng hàm để lấy URL origin
                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
                $host = $_SERVER['HTTP_HOST'];
                $url = $protocol . '://' . $host.'/'.$path;
                
                $viewUrl = "https://docs.google.com/gview?url=" . $url . "&embedded=true";
                return redirect($viewUrl);
            } else {
                echo "File " . $name[1] . " không hỗ trợ xem trực tiếp. Vui lòng tải về.";
            }
        } else {
            echo "File " . $name[1] . " không tồn tại trong hệ thống.";
        }
    }
}
