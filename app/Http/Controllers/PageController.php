<?php

namespace App\Http\Controllers;

use App\album;
use App\Img;
use App\Video;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function homepage()
    {
        $album = Album::where('display_id',0)->count();
        $img = Img::count();
        $video = Video::count();
        $banner = Album::where('display_id',2);
        return view('welcome',[
            'album' => $album,
            'img' => $img,
            'video' => $video,
            'banners' => $banner,
        ]);
    }

    public function pay($price)
    {
        return view('pay',['price'=>$price]);
    }

    public function price()
    {
        return view('price');
    }

}
