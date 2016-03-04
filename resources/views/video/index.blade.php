@extends('layouts.app')

@section('title',"相册列表")
@section('description',"abc")
@section('keywords',"keywords")

@section('style')
<link rel="stylesheet" href="/css/bootstrap-pagination.min.css" >
<style>
#order {
    padding: 2em 0;
}
#order h2 {
    color:#989ba2!important;
}
.statistics div {
    color:#989ba2!important;
}

.ui.items>.item>.image+.content div,
.ui.items>.item>.image+.content a
 {
    color:#555;
}
.ui.raised.segment {
    margin:0 2em;
}
.eleven > .segment {
    margin-top: 1.5em!important;
}
.eleven > .segment:first-child {
    margin-top: 0!important;
}
.image2 {
}
.labeled {
    font-size: 1em!important;
}
.statistic > .label {
    margin: 1em 0 0 0!important;
}
</style>

@endsection

@section('content')
<div class="ui large breadcrumb">
  <a href="{{ url('/') }}" class="section">首页</a>
  <i class="right chevron icon divider"></i>
  <div class="active section">视频</div>
  <a class="ui blue tag label" onclick="window.history.go(-1)" style="margin-left:3em;"> 返回 </a>
</div>

<div id="order" class="inverted">
    <div class="ui center aligned basic segment">
        <h2><i class="search icon"></i>A divider can segment content horizontally</h2>
        <div class="ui horizontal divider">注册 </div>
        <img src="/img/T1HHFgXXVeXXXXXXXX.png" alt="" style="width:120px;margin-right:1em;" />
        <div class="ui red labeled icon button">订阅会员 <i class="add icon"></i> </div>
    </div>
</div>

<div class="ui grid">
  <div class="eleven wide computer sixteen wide tablet sixteen wide mobile column">

      @if (count($videos) > 0)
          @foreach ($videos as $video)
          <div class="ui raised segment">
              <div class="ui items">
                  <div class="item ui grid">
                      <a href="/videoss/page/{{ $video->id }}" class="five wide computer eight wide tablet sixteen wide mobile column">
                          <div class="ui medium image">
                              <img src="/uploads/thumbnails/{{ $video->thumbnail }}">
                          </div>
                      </a>
                      <a href="/videoss/page/{{ $video->id }}" class="five wide computer eight wide tablet sixteen wide mobile column">
                          <div class="ui medium image image2">
                              <img src="/uploads/thumbnails/{{ $video->thumbnail2 }}">
                          </div>
                      </a>
                      <div class="content six wide computer sixteen wide tablet sixteen wide mobile column">
                          <a href="/videoss/page/{{ $video->id }}" class="header ui large">{{ $video->title }}</a>
                            <div class="ui divider"></div>
                          <div class="meta">
                              <span><i class="wait icon"></i>更新时间 : {{ substr($video->published_at,0,10) }}</span>
                          </div>
                          <div class="description">
                              <p>description : {{ $video->content }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      @endif

      <div class="dt-row dt-bottom-row">
          <div class="row text-center">
              <div class="dataTables_paginate paging_bootstrap_full" style="text-align: center;">
                  {{ $videos->links() }}
              </div>
          </div>
      </div>

  </div>
  <div class="five wide computer sixteen wide tablet sixteen wide mobile column">
    <div class="ui segment">Content</div>
  </div>
</div>



<br>
@endsection

@section('script')

<script type="text/javascript">
$(function(){
    $('.image').each(function(){
        $(this).children('img').css("visibility","hidden");
        $(this).css({
            "background-image":"url(" + $(this).children('img').attr('src') + ")",
            "background-size":"100% auto"
        });
    });
});
</script>
@endsection
