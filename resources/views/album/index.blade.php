@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/bootstrap-pagination.min.css" >
<style media="screen">
body {
    padding: 5em 0 0 0!important;
}
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
    margin-left: 1em!important;
    margin-right: 1.5em!important;
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


<div class="ui three statistics">
  <div class="statistic">
    <div class="value" style="color:#339933!important"><i class="file image outline icon"></i> 22 </div>
    <div class="label">相册数量 </div>
  </div>
  <div class="statistic">
    <div class="value" style="color:#339933!important"><i class="photo icon"></i> 1700 </div>
    <div class="label">图片 </div>
  </div>
  <div class="statistic">
    <div class="value" style="color:#336699!important"><i class="film icon"></i> 55 </div>
    <div class="label">视频 </div>
  </div>
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
  <div class="eleven wide column">

      @if (count($albums) > 0)
          @foreach ($albums as $album)
          <div class="ui raised segment">
              <div class="ui items">
                  <div class="item">
                      <a href="/album/{{ $album->id }}">
                          <div class="ui medium image">
                              <img src="/uploads/thumbnails/{{ $album->thumbnail }}">
                          </div>
                      </a>
                      <a href="/album/{{ $album->id }}">
                          <div class="ui medium image image2">
                              <img src="/uploads/thumbnails/{{ $album->thumbnail2 }}">
                          </div>
                      </a>
                      <div class="content">
                          <a href="/album/{{ $album->id }}" class="header ui large">{{ $album->title }}</a>
                            <div class="ui divider"></div>
                          <div class="meta">
                              <span><i class="wait icon"></i>更新时间 : {{ substr($album->published_at,0,10) }}</span>
                          </div>
                          <div class="description">
                              <p>description : {{ $album->content }}</p>
                          </div>
                          <div class="extra">
                              <div class="ui label"><i class="photo icon"></i> {{ $album->img->count() }} </div>
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
                  {{ $albums->links() }}
              </div>
          </div>
      </div>

  </div>
  <div class="five wide column">
    <div class="ui segment">Content</div>
  </div>
</div>



<br>
@endsection

@section('script')

<script type="text/javascript" src="/js/swiper.min.js"> </script>
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
