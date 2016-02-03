@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="/css/swiper.min.css" >
<link rel="stylesheet" href="/css/homepage.css" >

<style media="screen">

.swiper-container {
    width: 100%;
    height: 600px;
    margin: 20px auto;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    width: auto;
    height: 600px;

    /* Center slide text vertically */
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
}
.swiper-pagination-bullet {
    background: #fff;
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


    <h2 id="latest_head" class="ui horizontal divider header"><i class="bar photo icon"></i> Our Latsed album </h2>
    <div id="latest" class="ui three column grid">
        <div class="column">
            <a href="#"><img src="/image/banner/hero-personalV4.jpg" alt=""/></a>
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

    <div class="" style="width:100%;height:200px;background:#34363a;">

    </div>

    <h2 id="category_head" class="ui horizontal divider header"><i class="bar image icon"></i> Our album category</h2>
    <div id="category" class="ui two column centered grid">
        <div class="column">
            <div class="column">
                <a href="#"><img src="/image/banner/hero-personalV4.jpg" alt=""/></a>
            </div>
        </div>
        <div class="four column centered row">
            <div class="column"></div>
            <div class="column"></div>
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
</script>
@endsection
