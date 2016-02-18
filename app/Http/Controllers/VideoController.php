<?php

namespace App\Http\Controllers;

use App\Video;
use App\Img;
use App\Display;
use Image;
use File;
use Gate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{

    public function index($id = 1)
    {
        $videos = Video::orderBy('id', 'desc')
        ->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $id);
        return view('admin.video.index',['videos' => $videos]);
    }


    public function upload($id)
    {
        $video = Video::find($id);
        return view('admin.video.upload',['video' => $video]);
    }


    public function create()
    {
        $displays = $displayss = Display::all();
        return view('admin.video.create',[
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

        $request->user()->video()->create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'display_id' => $request->display,
            'content' => $request->content,
            'video' => $request->video,
            'free' => $request->free,
            'published_at' => $request->published_at,
        ]);

        Session()->flash('status', 'video create was successful!');

        return redirect('/admin/videos/');
    }

    public function show($id)
    {
        $imgs = Img::where('video_id',$id)
                    ->orderBy('id')
                    ->get();
        return view('admin.video.show',[
            'imgs' => $imgs,
            'video' => $id
        ]);
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $displays = $displayss = Display::all();

        return view('admin.video.edit',[
            'video'=>$video,
            "displays" => $displays,
            "displayss" => $displayss
        ]);
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        if (Gate::denies('video_authorize', $video)) {
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

        $video = Video::find($id);
        $video->title = $request->title;
        $video->content = $request->content;
        $video->thumbnail = $request->thumbnail;
        $video->free = $request->free;
        $video->published_at = $request->published_at;
        $video->save();

        Session()->flash('status', 'video update was successful!');

        return redirect('/admin/videos/');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        if (Gate::denies('video_authorize', $video)) {
            return "authorize fails";
        }

        foreach ($video->img as $videos) {
            File::delete('uploads/'.$videos->name);
            File::delete('uploads/thumbnails/'.'thumbnail_'.$videos->name);
            File::delete('uploads/'.$videos->thumbnail);
        }

        Img::where('video_id', $video->id)->delete();

        Video::destroy($id);

        return redirect('/admin/videos/');
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
                'photo' => 'image|max:100000'//kilobytes
            ],$messages);

            if ($request->file('thumbnail_file')->isValid())//上传文件是否有效
            {
                $OriginalName = $request->file('thumbnail_file')->getClientOriginalName();
                $file_pre = sha1(time().$OriginalName);//取得当前时间戳
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
                $OriginalName = $request->file('file')->getClientOriginalName();
                $file_pre = sha1(time().$OriginalName);//取得当前时间戳
                $file_suffix = substr(strchr($request->file('file')->getMimeType(),"/"),1);//取得文件后缀
                $destinationPath = 'uploads';//上传路径
                $fileName = $file_pre.'.'.$file_suffix;//上传文件名
                $thumbnail_name = 'thumbnail_'.$file_pre.'.'.$file_suffix;

                Image::make($request->file('file'))//生成缩略图
                                    ->fit(160,160)
                                    ->save('uploads/thumbnails/'.$thumbnail_name);

                $request->file('file')->move($destinationPath, $fileName);

                $img = new Img;
                $img->thumbnail = $thumbnail_name;
                $img->name = $fileName;
                $img->video_id = $request->video;
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
