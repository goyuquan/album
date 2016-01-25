<?php

namespace App\Http\Controllers;

use App\Album;
use App\Img;
use App\Category;
use App\Display;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function index($id = 1)
    {
        $albums = Album::orderBy('published_at', 'desc')
        ->orderBy('id', 'desc')
        ->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = $id);
        return view('admin.album.index',['albums' => $albums]);
    }


    public function upload($id)
    {
        $album = Album::find($id);
        return view('admin.album.upload',['album' => $album]);
    }


    public function create()
    {
        $displays = $displayss = Display::all();
        $categorys = $categoryss = Category::all();
        return view('admin.album.create',[
            "categorys" => $categorys,
            "categoryss" => $categoryss,
            "displays" => $displays,
            "displayss" => $displayss
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'title.required' => '标题不能为空',
            'category.required' => '选择分类',
            'title.unique' => '标题不能重复',
            'title.max' => '标题不能大于:max位',
            'title.min' => '标题不能小于:min位',
            'published_at.required' => '发布时间不能为空',
        ];
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'category' => 'required',
            'published_at' => 'required',
        ],$messages);

        $request->user()->album()->create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'category_id' => $request->category,
            'display_id' => $request->display,
            'content' => $request->content,
            'published_at' => $request->published_at,
        ]);

        Session()->flash('status', 'Album create was successful!');

        return redirect('/admin/albums/');
    }

    public function show($id)
    {
        $imgs = Img::where('album_id',$id)
                    ->orderBy('id', 'desc')
                    ->get();
        return view('admin.album.show',[
            'imgs' => $imgs,
            'album' => $id
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function thumbnail(Request $request)
    {
        if ($request->hasFile('thumbnail_file'))//文件是否上传
        {
            $messages = [
                'photo.image' => '上传文件必须是图片',
                'photo.max' => '上传文件不能大于:maxkb',
            ];
            $this->validate($request, [
                'photo' => 'image|max:1000'//kilobytes
            ],$messages);
            // return "true";

            if ($request->file('thumbnail_file')->isValid())//上传文件是否有效
            {
                $file_pre = getdate()[0];//取得当前时间戳
                $file_suffix = substr(strchr($request->file('thumbnail_file')->getMimeType(),"/"),1);//取得文件后缀
                $destinationPath = 'uploads';//上传路径
                $fileName = $file_pre.'.'.$file_suffix;//上传文件名
                $request->file('thumbnail_file')->move($destinationPath, $fileName);

                $img = new Img;
                $img->name = $fileName;
                $img->save();

                Session()->flash('img',$fileName);

                // return view('/admin/fileselect');
                return $fileName;
            } else {
                return "上传文件无效！";
            }
        } else {
            return "文件上传失败！";
        }
    }

    public function uploadstore(Request $request)
    {
        if ($request->hasFile('file'))//文件是否上传
        {
            if ($request->file('file')->isValid())//上传文件是否有效
            {
                $file_pre = sha1(time().time());//取得当前时间戳
                $file_suffix = substr(strchr($request->file('file')->getMimeType(),"/"),1);//取得文件后缀
                $destinationPath = 'uploads';//上传路径
                $fileName = $file_pre.'.'.$file_suffix;//上传文件名
                $request->file('file')->move($destinationPath, $fileName);

                $img = new Img;
                $img->thumbnail = $request->thumb;
                $img->name = $fileName;
                $img->album_id = $request->album;
                $img->save();

                Session()->flash('img',$fileName);

                // return view('/admin/fileselect');
                return $fileName;
            } else {
                return "上传文件无效！";
            }
        } else {
            return "文件上传失败！";
        }
    }


}
