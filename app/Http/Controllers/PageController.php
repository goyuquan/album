<?php

namespace App\Http\Controllers;

use App\Album;
use App\Img;
use App\Video;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function homepage()
    {
        $album_latsed = Album::where('published_at','<',date("Y-m-d h:i:s"))
            ->orderBy('id','desc')->take(8)->get();
        $Video_latsed = Video::where('published_at','<',date("Y-m-d h:i:s"))
            ->orderBy('id','desc')->take(8)->get();
        $album = Album::where('display_id',0)->count();
        $img = Img::count();
        $video = Video::count();
        $banner = Album::where('display_id',2);
        return view('welcome',[
            'album_latsed' => $album_latsed,
            'video_latsed' => $Video_latsed,
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
