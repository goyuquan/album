@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/bootstrap-pagination.min.css" >
<style media="screen">
body {
    padding: 5em 0 0 0!important;
}
#order {
    margin:3em 0 0 0!important;
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
    color:#babdc4;
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
}
.labeled {
    font-size: 1em!important;
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
    <div class="value" style="color:#336699!important"><i class="record icon"></i> 55 </div>
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

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ui raised segment">
          <div class="ui items">
              <div class="item">
                  <div class="ui medium image">
                      <img src="/image/banner/hero-personalV4.jpg">
                  </div>
                  <div class="ui medium image image2">
                      <img src="/img/demo/s1.jpg">
                  </div>
                  <div class="content">
                      <a class="header">标题</a>
                      <div class="meta">
                          <span>Description</span>
                      </div>
                      <div class="description">
                          <p></p>
                      </div>
                      <div class="extra">Additional Details </div>
                  </div>
              </div>
          </div>
      </div>



      <nav style="text-align: center;">
          <ul class="pagination">
              <li>
                  <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                  <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
          </ul>
      </nav>

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
