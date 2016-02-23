@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="/css/swiper.min.css" >
<link rel="stylesheet" href="/css/homepage.css" >

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


<div class="ui four statistics">
  <div class="statistic">
    <div class="value"><i class="file image outline icon"></i> 22 </div>
    <div class="label">相册数量 </div>
  </div>
  <div class="statistic">
    <div class="value"><i class="photo icon"></i> 1700 </div>
    <div class="label">图片 </div>
  </div>
  <div class="statistic">
    <div class="value"><i class="record icon"></i> 55 </div>
    <div class="label">视频 </div>
  </div>
  <div class="statistic">
    <div class="value"><i class="Video play icon"></i> 5 </div>
    <div class="label">Flights </div>
  </div>
</div>

<div id="order" class="inverted">
    <div class="ui center aligned basic segment">
        <h2><i class="search icon"></i>A divider can segment content horizontally</h2>
        <div class="ui horizontal divider">注册 </div>
        <img src="/img/grtwIwSmzYXflpG.png" alt="" style="width:120px;margin-right:1em;" />
        <div class="ui red labeled icon button">订阅会员 <i class="add icon"></i> </div>
    </div>
</div>


<h2 id="latest_photo_head" class="ui horizontal divider header"><i class="file image outline icon"></i> Our Latsed album </h2>
<div id="latest_photo" class="ui three column grid">
    <div class="column">
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="/image/banner/hero-personalV4.jpg" class="visible content">
                <img src="/img/demo/s1.jpg" class="hidden content">
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

    <div class="column">
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="/image/banner/hero-personalV4.jpg" class="visible content">
                <img src="/img/demo/s1.jpg" class="hidden content">
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

    <div class="column">
        <div class="ui link cards">
            <div class="card">
                <div class="image">
                    <img src="/image/banner/hero-consumerV42.jpg">
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
    <div id="latest_video" class="ui two column grid">
        <div class="column">
            <div class="ui card">
                <div class="ui slide masked reveal image">
                    <img src="/image/banner/hero-personalV4.jpg" class="visible content">
                    <img src="/img/demo/s1.jpg" class="hidden content">
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
        <div class="column">
            <div class="ui card">
                <div class="ui slide masked reveal image">
                    <img src="/image/banner/hero-personalV4.jpg" class="visible content">
                    <img src="/img/demo/s1.jpg" class="hidden content">
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

<h2 id="category_head" class="ui horizontal divider header"><i class="bar image icon"></i> Our album category</h2>
<div id="category" class="ui three column centered grid">

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
        <img src="/img/grtwIwSmzYXflpG.png" alt="" style="width:120px;margin-right:1em;" />
        <div class="ui red labeled icon button">订阅会员 <i class="add icon"></i> </div>
    </div>
</div>
<br>
@endsection

@section('script')

<script type="text/javascript" src="/js/swiper.min.js"> </script>
<script type="text/javascript">
window.onload = function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 'auto',
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
        paginationClickable: true,
        spaceBetween: 20
    });
}
$(function(){
    $('.special.cards .image').dimmer({
        on: 'hover'
    });
});
</script>
@endsection
