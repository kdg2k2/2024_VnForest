<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiVanBan;
use App\TinTuc;
use App\VanBan;

class AdminController extends Controller
{
    public function getHome(){
        $dis_loaivb = VanBan::select('id_loaivb')->distinct()->pluck('id_loaivb')->toArray();
        $name_loaivb=[];
        $count_loaivb=[];
        foreach($dis_loaivb as $item){
            array_push($name_loaivb, LoaiVanBan::findOrFail($item)->tenloaivb);
            array_push($count_loaivb, VanBan::where('id_loaivb', $item)->count());
        }

        $name_namphathanh = VanBan::select('namphathanh')->distinct()->pluck('namphathanh')->toArray();
        $count_namphathanh=[];
        foreach($name_namphathanh as $item){
            array_push($count_namphathanh, VanBan::where('namphathanh', $item)->count());
        }

        $dis_loaitt = TinTuc::select('id_loaitt')->distinct()->pluck('id_loaitt')->toArray();
        $name_loaitt=[];
        $count_loaitt=[];
        foreach($dis_loaitt as $item){
            array_push($name_loaitt, LoaiVanBan::findOrFail($item)->tenloaitt);
            array_push($count_loaitt, TinTuc::where('id_loaitt', $item)->count());
        }

        return view('admin.home.home',[
            'name_loaivb'=>$name_loaivb,
            'count_loaivb'=>$count_loaivb,
            'name_loaitt'=>$name_loaitt,
            'count_loaitt'=>$count_loaitt,
            'name_namphathanh'=>$name_namphathanh,
            'count_namphathanh'=>$count_namphathanh,
        ]);
    }
}
