@extends('layouts.app')

@section('title',$video->title)
@section('description',$video->title)
@section('keywords',$video->title)

@section('style')

<link rel="stylesheet" href="//cdn.bootcss.com/video.js/5.8.0/alt/video-js-cdn.min.css">

<style>

</style>

@endsection

@section('content')

<div class="ui large breadcrumb">
    <a href="{{url('/')}}" class="section">首页</a>
    <i class="right chevron icon divider"></i>
    <a href="/albums/" class="section">视频</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">{{ $video->title }}</div>
    <a class="ui blue tag label" onclick="window.history.go(-1)" style="margin-left:3em;"> 返回 </a>
</div>

<div class="ui grid">
    <div class="eleven wide computer sixteen wide tablet sixteen wide mobile column">

        <div class="ui hidden divider"></div>
        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
        poster="/uploads/6cfc32300542055c1bec84cd594c8d4830161b9d.jpeg" data-setup="{}">
        <source src="/videos/4994ef4043ae7e5e597031795fc1defea2b9958c.mp4" type='video/mp4'>
        <!-- <source src="MY_VIDEO.webm" type='video/webm'>
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video> -->
        <div class="ui hidden divider"></div>
    </div>
    <div class="five wide computer sixteen wide tablet sixteen wide mobile column">
        <div class="ui segment">Content</div>
    </div>
</div>

@endsection

@section('script')
<script src="//cdn.bootcss.com/video.js/5.8.0/video.min.js"> </script>
<script src="//cdn.bootcss.com/video.js/5.8.0/lang/zh-CN.js"> </script>

<script type="text/javascript">

</script>
@endsection
