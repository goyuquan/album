@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="/css/swiper.min.css" >

<style media="screen">

.swiper-container {
    width: 100%;
    height: 500px;
    margin: 20px auto;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    width: auto;
    height: 500px;

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

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript" src="/js/swiper.min.js"> </script>
<script type="text/javascript">
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
$(function(){
});
</script>
@endsection
