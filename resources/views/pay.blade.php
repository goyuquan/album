@extends('layouts.app')

@section('title',"支付")
@section('description',"加入会面")
@section('keywords',"加入会面")

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
</style>
@endsection

@section('content')
<div class="ui large breadcrumb">
    <a href="{{ url('/') }}" class="section">首页</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">加入VIP会员</div>
    <a class="ui blue tag label" onclick="window.history.go(-1)" style="margin-left:3em;"> 返回 </a>
</div>


<div class="ui grid content_body">


    <div class="eight wide column centered">
        <h2 class="ui center aligned header blue">
            <i class="users icon"></i>
            <div class="content">加入VIP会员，欢迎使用支付宝付款. </div>
        </h2>
    </div>


    <div class="ten wide column centered">
        <div class="ui steps">
            <div class="step">
                <i class="info icon"></i>
                <div class="content">
                    <div class="title">第一步：扫描二维码</div>
                    <div class="description">扫描网站招供的临时支付宝二维码</div>
                </div>
            </div>
        </div>
        <img class="ui small bordered image" src="/image/2016-03-06-145320.jpg">
    </div>

    <div class="ten wide column centered">
        <div class="ui steps">
            <div class="step">
                <i class="info icon"></i>
                <div class="content">
                    <div class="title">第二步：转账</div>
                    <div class="description">点击屏幕下方"转账"按钮</div>
                </div>
            </div>
        </div>
        <img class="ui medium bordered image" src="/image/Screenshot_2016-03-06-14-56-52.jpg">
    </div>

    <div class="ten wide column centered">
        <div class="ui steps">
            <div class="completed step">
                <i class="payment icon"></i>
                <div class="content">
                    <div class="title">第三步：填写金额和备注注册邮箱</div>
                </div>
            </div>
        </div>
        <div class="ui warning message" style="text-align:center;">
            <div class="header">你的注册邮箱是： </div>
        </div>
        <div class="ui negative message" style="text-align:center;">
            <div class="header">重要提示： </div>
            <p>转账时请务必备注你的注册邮箱. </p>
        </div>
        <img class="ui medium bordered image" src="/image/Screenshot_2016-03-06-15-18-33.jpg">
    </div>

    <div class="ten wide column centered">
        <div class="ui steps">
            <div class="step">
                <i class="payment icon"></i>
                <div class="content">
                    <div class="title">除了用手机扫描二维码，也可以直接用支付宝账号转账:  152452365</div>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection

@section('script')

<script type="text/javascript">

</script>
@endsection
