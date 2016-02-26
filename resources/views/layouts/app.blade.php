<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')_sitetitle</title>

    <link rel="stylesheet" href="/css/semantic.min.css">
    <link rel="stylesheet" href="/css/common.css">

    @yield('style')

</head>
<body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/semantic.min.js"></script>

    @yield('script')
    <script type="text/javascript">

    $(function(){

          $('#user').popup({
            popup : $('#user_pop'),
            inline   : true,
            hoverable: true,
            position : 'bottom right'
          });

    });

    </script>
</body>
</html>
