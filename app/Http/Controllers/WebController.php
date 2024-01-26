<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function getHome(){
        return view('pages.home.home');
    }

    public function getTintuc(){
        return view('pages.tintuc.tintuc');
    }

    public function getXemtin(){
        return view('pages.tintuc.xemtin');
    }

    public function getVanban(){
        return view('pages.vanban.vanban');
    }
}
