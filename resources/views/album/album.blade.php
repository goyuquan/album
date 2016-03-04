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
.modal .image {
    /*position: relative!important;*/
    margin: 0 auto!important;
}
.modal .image img{
    max-width: 100%!important;
}
#pageslider {
}
#pageslider a.ws_next,
#pageslider a.ws_prev {
    position:absolute;
    z-index:60;
    overflow: hidden;
    width: 50%;
    height: 100%;
    top: 0;
    opacity: .5;
}
#pageslider a.ws_next {
    left: 50%;
    cursor: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAqFBMVEUAAAAAAAAAAAAAAADp6emampoODg4BAQEAAAAAAAC+vr4AAAAnJycAAAAAAADz8/Px8fHs7OzW1tYAAAAAAAAAAAAAAADZ2dmcnJx/f39eXl4AAADT09OJiYnNzc24uLhubm5VVVVTU1PQ0NCRkZGEhIQnJyciIiLu7u7i4uJwcHBhYWE6OjoAAADl5eXExMTBwcHBwcGpqamjo6OVlZV8fHwhISH19fVy7acrAAAAN3RSTlMAAR4E+rM+PA0b2gZPKCX+/vzvMhEIN/G0l3QL7KTn2Ypxb+q3o15L/PiUhW0T+ePi3s/IinVTJyfCOgAAAXxJREFUOMuNlel2gjAQhUMWIAiIBBBwq1Zt3bq3ef83q4JtVs7J/ZnznQy5M3MBilBIExZcxRIaIjAgr6RVS6IcZxnOI9JWtPRs3AjG9ZRLmtYxHJnXFT7BXBMmfqFdiuBmzi2abyBSyqbNhFs1aVKpPEoXGR9Qtkj/7/RgM+aDGjfQu4PFWtS1VV8X9w/0pXfkx/3pVX+RX/aFiTg77Ons4q80knTFy1jy7zO5Hs10Ese3K2nNhbYQgBsZqWRNAUCV3Le3amQjpxUCYascLRIr2YaAEtU1O0koSCKukamFjBLAcr0TuxT15LtkLwMB5gNkuH8RBgUgyMzufoVdJ5iwM7OCk28riA3uAaJu5s9YLs3yIS5+lB9j2PMsONUeSqxc2HPCcK2F2fGPW2ot1IZixXruaWkMhTlmJsdrqg/uR+IJTh5cfRXwOb3An6V1FUApL9dhe9rpzuZ+6bqu7gEgIsUkxSAj15ByjT3nIHWPZjPsoRr2UA5759/HL+WBz8c5CVTZAAAAAElFTkSuQmCC') 20 20, move;
}
#pageslider a.ws_prev {
    left: 0;
    cursor: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAApVBMVEUAAAAAAAAAAAAAAAAJCQkAAACampomJiYAAADp6ekAAAAAAADt7e0DAwPz8/Px8fHW1tYAAAAAAAAAAAAAAADZ2dnT09O8vLyIiIh/f39eXl4AAADOzs4AAAC+vr6cnJy4uLhubm5VVVVTU1Pq6uri4uKRkZEmJibo6OjBwcGcnJyFhYVwcHBhYWE7OzsAAADExMSpqamjo6OVlZV8fHwhISH19fXdUOd4AAAANnRSTlMAAR4EPg2zThv5JQb8Ov7+7zIIKRPx7Nmll3Q35wvbtNiKcW/7+LZd+eC1oZSGbRHjz8iKdVMz+8v0AAABgklEQVQ4y42V6XKCMBSFQxJCQHZQtirUtVq1e97/0TqKQ7N2cv7BfHMvdzsAQcilRRZhHGUFdREwyMlp15JV6ieJn65I29Hc0XEz6PVzxmnee3Cmhisx8Zkkn+BSCorgZsE0WmwgEtIGzZZpFTYBlx4FdcIMSupgiunAJmZGxQ10HmC5Dtk/Ctfl4wOxXEdaX/Y7riKcj4mJxD39wDK4ctWRe/Lc8yXOcx3gFB9cP71bSNprOADgnnvXUwBQN9dxKBv4aXYIuK2Wg2ehs60LKNFyz2LHCAVFZcGxqgBZyjXMe9NzLM1A9DI9ba8mjvkRwMlf/Ow+VPdbnWiCeXB4gF+xBuRT7w7uuHSvsZpaKOaITWSaie1Z4eW48HWstIcSZkESKo+wmkgmjlBZiioayegoLsW4Ziqprpm6uMONdIpPeXHVUxhwuaSHnXwKIFeO6/1yOKdcE3Fue67WBsBZSmzk6gAJJhWaTcrW9uyNVLXmk2jNp8maZbOHotlD3uytfx+/dM7Mf8Z6jgIAAAAASUVORK5CYII=') 20 20, move;
}
.cards .card {
    cursor: pointer;
}
#loader {
    padding:10em 0;
    border: none;
    font-size: 2em;
    display: none;
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
