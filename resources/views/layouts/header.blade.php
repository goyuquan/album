<div class="ui fixed menu">
  <div class="ui container">
    <a href="{{ url('/') }}" class="header item">

      welcome logo
    </a>

    <div class="right menu">
    <a href="{{ url('/') }}" class="item">首页</a>
    <a href="/albums/" class="item">相册</a>
    <a href="/videos/" class="item">视频</a>
    <a href="#" class="item">会员价格表</a>
      @if (Auth::guest())
      <a href="{{ url('/login') }}" class="item">登陆</a>
      <a href="{{ url('/register') }}" class="item">注册</a>
      @else
      <a href="/admin" class="item">
          {{ Auth::user()->name }}
      </a>
      <a href="{{ url('/logout') }}" class="item"><i class="fa fa-btn fa-sign-out"></i>退出</a>
      @endif
    </div>

  </div>
</div>
