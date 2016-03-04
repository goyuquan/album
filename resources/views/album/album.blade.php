@extends('layouts.app')

@section('title',"$album->title")
@section('description',"$album->title")
@section('keywords',"$album->title")

@section('style')


<style>
#order {
    padding: 2em 0;
}
#order h2 {
    color:#989ba2!important;
}
.ui.labeled.icon.button, .ui.labeled.icon.buttons .button {
    top:-16px;
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
.cards .card {
    cursor: pointer;
}

</style>

@endsection

@section('content')

<div class="ui large breadcrumb">
    <a href="{{url('/')}}" class="section">首页</a>
    <i class="right chevron icon divider"></i>
    <a href="/albums/" class="section">图片</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">标题</div>
    <a class="ui blue tag label" onclick="window.history.go(-1)" style="margin-left:3em;"> 返回 </a>
</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">

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

        <h2 class="ui header center aligned">
            {{ $album->title}} <div class="sub header"><i class="wait icon"></i>更新时间 : {{ substr($album->published_at,0,10) }}</div>
        </h2>


        <div class="ui raised segment">
            <div class="ui four stackable cards">
                @if (count($imgs) > 0)
                @foreach ($imgs as $img)
                <div class="card">
                    <a href="/album/{{ $album->id }}/page/">
                        <div class="image">
                            <img src="/uploads/thumbnails/{{ $img->thumbnail }}">
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </div>
    <div class="five wide computer sixteen wide tablet sixteen wide mobile column">
        <div class="ui segment">Content</div>
    </div>
</div>

</div>

@endsection

@section('script')

<script type="text/javascript">

$(function(){

    $(".card").each(function(){
        var old_href = $(this).find("a").attr("href");
        var car_index = $(this).index() + 1;
        $(this).find("a").attr("href",old_href + car_index);
    });

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
