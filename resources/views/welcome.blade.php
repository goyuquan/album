@extends('layouts.app')

@section('title','title_description')
@section('description','title_description')
@section('keywords','title_keywords')

@section('style')
<link rel="stylesheet" href="//cdn.bootcss.com/video.js/5.8.0/alt/video-js-cdn.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/Swiper/3.3.1/css/swiper.min.css" >
<style>
/*homepage.css*/
#menu {
    margin-bottom: 0;
}
.swiper-container {
    width: 100%;
    height: 500px;
    margin: 0 auto 50px;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    width: auto;
    height: 500px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}
.swiper-slide img {
    height: 100%;
    width: auto;
    visibility: hidden;
}
.swiper-pagination-bullet {
    background: #fff;
}
.ui.labeled.icon.button, .ui.labeled.icon.buttons .button {
    top:-16px;
}
#latest_photo_head,#latest_video_head {
    margin: 2em 0 1em 0!important;
}
#latest_photo,#latest_video {
    padding: 0 2em 3em!important;
}
#link_head {
    margin: 2em 0 1em 0!important;
}
#link {
    padding: 0 2em 0em!important;
}
#order {
    margin:3em 0 0 0!important;
    padding: 2em 0;
}
#order h2 {
    color:#989ba2!important;
}
img {
    width: 100%;
}
.card {
    width: 100%!important;
    background: #efefef;
}
.divider {
    color:#555!important;
    margin: 1em 0!important;
}
.inverted {
    width:100%;
    padding: 1px 0 0 0;
    background:#fff;
}
.statistics div {
    color:#666!important;
}
.statistic > .label {
    margin: 1em 0 0 0!important;
}
</style>

@endsection

@section('content')

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="/image/banner/hero-personalV4.jpg" alt=""/> </div>
        <div class="swiper-slide"> <img src="/image/banner/hero-consumerV42.jpg" alt="" /> </div>
        <div class="swiper-slide"> <img src="/image/banner/hero-proV4.jpg" alt="" /> </div>
        <div class="swiper-slide"> <img src="/image/banner/hero-protectV4.jpg" alt="" /> </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


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


<h2 id="latest_photo_head" class="ui horizontal divider header"><i class="file image outline icon"></i> Our Latsed album </h2>
<div id="latest_photo" class="ui grid">
    <div class="four wide computer eight wide tablet sixteen wide mobile column">
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <div class="visible content">
                    <img src="/image/banner/hero-personalV4.jpg">
                </div>
                <div class="hidden content">
                    <img src="/img/demo/s1.jpg">
                </div>
            </div>

            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>

    <div class="four wide computer eight wide tablet sixteen wide mobile column">
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <div class="visible content">
                    <img src="/image/banner/hero-personalV4.jpg">
                </div>
                <div class="hidden content">
                    <img src="/img/demo/s1.jpg">
                </div>
            </div>

            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>

    <div class="four wide computer eight wide tablet sixteen wide mobile column">
        <div class="ui link cards">
            <div class="card">
                <div class="ui slide masked reveal image">
                    <div class="visible content">
                        <img src="/image/banner/hero-consumerV42.jpg">
                    </div>
                    <div class="hidden content">
                        <img src="/image/banner/hero-consumerV42.jpg">
                    </div>
                </div>
                <div class="content">
                    <div class="header">Matt Giampietro</div>
                    <div class="meta">
                        <a>好友</a>
                    </div>
                    <div class="description">Matthew is an interior designer living in New York. </div>
                </div>
                <div class="extra content">
                    <span class="right floated">2013年加入 </span>
                    <span><i class="user icon"></i> 75 Friends </span>
                </div>
            </div>
        </div>
    </div>

    <div class="four wide computer eight wide tablet sixteen wide mobile column">
        <div class="ui link cards">
            <div class="card">
                <div class="ui slide masked reveal image">
                    <div class="visible content">
                        <img src="/image/banner/hero-consumerV42.jpg">
                    </div>
                    <div class="hidden content">
                        <img src="/image/banner/hero-consumerV42.jpg">
                    </div>
                </div>
                <div class="content">
                    <div class="header">Matt Giampietro</div>
                    <div class="meta">
                        <a>好友</a>
                    </div>
                    <div class="description">Matthew is an interior designer living in New York. </div>
                </div>
                <div class="extra content">
                    <span class="right floated">2013年加入 </span>
                    <span><i class="user icon"></i> 75 Friends </span>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="inverted">
    <h2 id="latest_video_head" class="ui horizontal divider header"><i class="bar photo icon"></i> Our Latsed VIDEO </h2>
    <div id="latest_video" class="ui grid">
        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
            <div class="ui card">
                <div class="ui slide masked reveal image">
                    <div class="visible content">
                        <img src="/image/banner/hero-personalV4.jpg">
                    </div>
                    <div class="hidden content">
                        <img src="/img/demo/s1.jpg">
                    </div>
                </div>
                <div class="content">
                    <a class="header">Team Fu &amp; Hess</a>
                    <div class="meta">
                        <span class="date">Create in Sep 2014</span>
                    </div>
                </div>
                <div class="extra content">
                    <a><i class="users icon"></i> 2 Members </a>
                </div>
            </div>
        </div>
        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
            <div class="ui card">
                <div class="ui slide masked reveal image">
                    <div class="visible content">
                        <img src="/image/banner/hero-personalV4.jpg">
                    </div>
                    <div class="hidden content">
                        <img src="/img/demo/s1.jpg">
                    </div>
                </div>
                <div class="content">
                    <a class="header">Team Fu &amp; Hess</a>
                    <div class="meta">
                        <span class="date">Create in Sep 2014</span>
                    </div>
                </div>
                <div class="extra content">
                    <a><i class="users icon"></i> 2 Members </a>
                </div>
            </div>
        </div>
    </div>

</div>

<h2 id="link_head" class="ui horizontal divider header"><i class="bar image icon"></i> Our album category</h2>
<div id="link" class="ui three column stackable grid">

    <div class="column">
        <div class="ui link cards">
            <div class="card">
                <div class="image">
                    <img src="/image/banner/hero-personalV4.jpg">
                </div>
                <div class="content">
                    <div class="header">Matt Giampietro</div>
                    <div class="meta">
                        <a>好友</a>
                    </div>
                    <div class="description">Matthew is an interior designer living in New York. </div>
                </div>
                <div class="extra content">
                    <span class="right floated">2013年加入 </span>
                    <span><i class="user icon"></i> 75 Friends </span>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui link cards">
            <div class="card">
                <div class="image">
                    <img src="/image/banner/hero-personalV4.jpg">
                </div>
                <div class="content">
                    <div class="header">Matt Giampietro</div>
                    <div class="meta">
                        <a>好友</a>
                    </div>
                    <div class="description">Matthew is an interior designer living in New York. </div>
                </div>
                <div class="extra content">
                    <span class="right floated">2013年加入 </span>
                    <span><i class="user icon"></i> 75 Friends </span>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui link cards">
            <div class="card">
                <div class="image">
                    <img src="/image/banner/hero-personalV4.jpg">
                </div>
                <div class="content">
                    <div class="header">Matt Giampietro</div>
                    <div class="meta">
                        <a>好友</a>
                    </div>
                    <div class="description">Matthew is an interior designer living in New York. </div>
                </div>
                <div class="extra content">
                    <span class="right floated">2013年加入 </span>
                    <span><i class="user icon"></i> 75 Friends </span>
                </div>
            </div>
        </div>
    </div>

    <div class="four column centered row">
        <div class="column"></div>
        <div class="column"></div>
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


@endsection

@section('script')
<script src="//cdn.bootcss.com/Swiper/3.3.1/js/swiper.min.js"></script>
<script type="text/javascript">
window.onload = function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 'auto',
        centeredSlides: true,
        autoplay: 250000000,
        autoplayDisableOnInteraction: false,
        paginationClickable: true,
        spaceBetween: 20
    });
}
$(function(){

    $('.swiper-slide,#latest_photo .card .image .content,.reveal > .content,#link .card .image').each(function(){
        $(this).children('img').css("visibility","hidden");
        $(this).css({
            "background-image":"url(" + $(this).children('img').attr('src') + ")",
            "background-size":"100% auto"
        });
    });

});

</script>
@endsection
