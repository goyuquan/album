    @extends('layouts.app')

    @section('title',"加入VIP会员")
    @section('description',"加入VIP会员")
    @section('keywords',"加入VIP会员")

    @section('style')
    <style media="screen">
    .content_body {
        margin:2em 0!important;
    }
    .content_body .steps {
        display: block!important;
    }
    .image {
        margin-left: auto;
        margin-right: auto;
    }
    .price_body {
        margin: 4em auto!important;
    }
    table th,table td {
        text-align: center!important;
    }
    </style>
    @endsection

    @section('content')
    <div class="ui large breadcrumb">
        <a href="{{ url('/') }}" class="section">首页</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">加入VIP会员</div>
        <a class="ui blue tag label" onclick="window.history.go(-1)" style="margin-left:3em;"> 返回 </a>
    </div>

    <h1 class="ui dividing blue header center aligned">
        <i class="users icon"></i>
        加入VIP会员</h1>
    <p class="text_center">
        有您的加入我们的高质量资源才能继续下去.
    </p>


    <div class="price_body ui two column centered grid">
        <div class="column">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>30天会员</th>
                        <th>90天会员</th>
                        <th>180天会员</th>
                        <th>360天会员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> ￥89 </td>
                        <td> ￥249 </td>
                        <td> ￥449 </td>
                        <td> ￥799 </td>
                    </tr>
                    <tr>
                        <td class="positive"> <i class="checkmark icon"></i>图片</td>
                        <td class="positive"> <i class="checkmark icon"></i>图片</td>
                        <td class="positive"> <i class="checkmark icon"></i>图片</td>
                        <td class="positive"> <i class="checkmark icon"></i>图片</td>
                    </tr>
                    <tr>
                        <td class="positive"> <i class="checkmark icon"></i>视频</td>
                        <td class="positive"> <i class="checkmark icon"></i>视频</td>
                        <td class="positive"> <i class="checkmark icon"></i>视频</td>
                        <td class="positive"> <i class="checkmark icon"></i>视频</td>
                    </tr>
                    <tr>
                        <td> <a href="/pay/89" class="positive ui button">加入</a> </td>
                        <td> <a href="/pay/249" class="positive ui button">加入</a> </td>
                        <td> <a href="/pay/449" class="positive ui button">加入</a> </td>
                        <td> <a href="/pay/799" class="positive ui button">加入</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @endsection

    @section('script')

    <script type="text/javascript">

    </script>
    @endsection
