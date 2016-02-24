@extends('layouts.app')

@section('style')
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
    margin: 0 auto!important;
}
.modal .image img{
    max-width: 100%!important;
}
</style>

@endsection

@section('content')


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
          <div class="ui four stackable cards">

              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
              <div class="card">
                  <div class="image">
                      <img src="/uploads/131946f355c4ffd9df6d9804eae9dd555b51fe59.jpeg">
                  </div>
              </div>
          </div>

      </div>
  </div>
  <div class="five wide column">
    <div class="ui segment">Content</div>
  </div>
</div>


<div class="ui fullscreen modal">
  <i class="close icon"></i>
  <div class="image content">
    <div class="image text container">

      <img src="/image/banner/hero-personalV4.jpg" alt="" />

    </div>
  </div>
</div>
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

    $('.ui.fullscreen.modal')
      .modal({
          offset:600
      })
      .modal('show');
    });
</script>
@endsection
