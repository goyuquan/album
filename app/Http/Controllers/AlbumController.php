<?php

namespace App\Http\Controllers;

use App\Album;
use App\Img;
use App\Display;
use Image;
use File;
use Gate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function index($id = 1)
    {
        $albums = Album::orderBy('id', 'desc')
        ->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $id);
        return view('admin.album.index',['albums' => $albums]);
    }

    public function albums($id = 1)
    {
        $albums = Album::where('published_at','<',date("Y-m-d h:i:s"))
        ->orderBy('id', 'desc')
        ->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $id);
        return view('album.index',['albums' => $albums]);
    }

    public function album($id)
    {
        $album = Album::find($id);
        return view('album.album',['album' => $album]);
    }

    public function upload($id)
    {
        $album = Album::find($id);
        return view('admin.album.upload',['album' => $album]);
    }


    public function create()
    {
        $displays = $displayss = Display::all();
        return view('admin.album.create',[
            "displays" => $displays,
            "displayss" => $displayss
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'title.required' => '标题不能为空',
            'title.unique' => '标题不能重复',
            'title.max' => '标题不能大于:max位',
            'title.min' => '标题不能小于:min位',
            'published_at.required' => '发布时间不能为空',
        ];
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'published_at' => 'required',
        ],$messages);

        $request->user()->album()->create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'thumbnail2' => $request->thumbnail2,
            'display_id' => $request->display,
            'content' => $request->content,
            'free' => $request->free,
            'published_at' => $request->published_at,
        ]);

        Session()->flash('status', 'Album create was successful!');

        return redirect('/admin/albums/');
    }

    public function show($id)
    {
        $imgs = Img::where('album_id',$id)
                    ->orderBy('id')
                    ->get();
        return view('admin.album.show',[
            'imgs' => $imgs,
            'album' => $id
        ]);
    }

    public function edit($id)
    {
        $album = Album::find($id);
        $displays = $displayss = Display::all();

        return view('admin.album.edit',[
            'album'=>$album,
            "displays" => $displays,
            "displayss" => $displayss
        ]);
    }

    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        if (Gate::denies('album_authorize', $album)) {
            return "authorize fails";
        }

        $messages = [
            'title.required' => '标题不能为空',
            'title.max' => '标题不能小于:max位',
            'title.min' => '标题不能小于:min位',
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
        ],$messages);

        $album = Album::find($id);
        $album->title = $request->title;
        $album->content = $request->display;
        $album->display_id = $request->content;
        $album->thumbnail = $request->thumbnail;
        $album->thumbnail2 = $request->thumbnail2;
        $album->free = $request->free;
        $album->published_at = $request->published_at;
        $album->save();

        Session()->flash('status', 'Album update was successful!');

        return redirect('/admin/albums/');
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        if (Gate::denies('album_authorize', $album)) {
            return "authorize fails";
        }

        foreach ($album->img as $albums) {
            File::delete([
                'uploads/'.$albums->name,
                'uploads/thumbnails/'.'thumbnail_'.$albums->name,
                'uploads/'.$albums->thumbnail,
                'uploads/thumbnails/'.$albums->thumbnail,
                'uploads/'.$albums->thumbnail2,
                'uploads/thumbnails/'.$albums->thumbnail2,
            ]);
        }

        Img::where('album_id', $album->id)->delete();

        Album::destroy($id);

        return redirect('/admin/albums/');
    }



    public function uploadstore(Request $request)
    {
        if ($request->hasFile('file'))//文件是否上传
        {
            if ($request->file('file')->isValid())//上传文件是否有效
            {
                $OriginalName = $request->file('file')->getClientOriginalName();
                $file_pre = sha1(time().$OriginalName);//取得当前时间戳
                $file_suffix = substr(strchr($request->file('file')->getMimeType(),"/"),1);//取得文件后缀
                $destinationPath = 'uploads';//上传路径
                $fileName = $file_pre.'.'.$file_suffix;//上传文件名
                $thumbnail_name = 'thumbnail_'.$file_pre.'.'.$file_suffix;

                Image::make($request->file('file'))//生成缩略图
                                    ->fit(160)
                                    ->save('uploads/thumbnails/'.$thumbnail_name);

                $request->file('file')->move($destinationPath, $fileName);

                $img = new Img;
                $img->thumbnail = $thumbnail_name;
                $img->name = $fileName;
                $img->album_id = $request->album;
                $img->save();

                Session()->flash('img',$fileName);

                return $fileName;
            } else {
                return "上传文件无效！";
            }
        } else {
            return "文件上传失败！";
        }
    }


}
