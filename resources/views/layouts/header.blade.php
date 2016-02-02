<div class="ui fixed inverted menu">
  <div class="ui container">
    <a href="{{ url('/') }}" class="header item">
      <img class="logo" src="assets/images/logo.png">
      welcome logo
    </a>

    <div class="right menu">
    <a href="{{ url('/') }}" class="item">Home</a>
    <a href="/articles/" class="item">文章</a>
    <a href="#" class="item">分类一</a>
    <a href="#" class="item">分类二</a>
      @if (Auth::guest())
      <a href="{{ url('/login') }}" class="item">Login</a>
      <a href="{{ url('/register') }}" class="item">Register</a>
      @else
      <a href="/admin" class="item">
          {{ Auth::user()->name }}
      </a>
      <a href="{{ url('/logout') }}" class="item"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
      @endif
    </div>

  </div>
</div>
