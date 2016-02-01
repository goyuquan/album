@extends('admin.layouts.admin')

@section('style')

<style media="screen">
    .jarviswidget {
        border-top: 1px solid #ccc;
    }
    footer {
        padding: 0!important;
    }
    footer button {
        margin-top: 0!important;
    }
    .onoffswitch {
        float: right;
    }
</style>

@endsection

@section('content')

<!-- MAIN PANEL -->
<div id="main" role="main">


    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment">
            <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                <i class="fa fa-refresh"></i>
            </span>
        </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>
                控制台
            </li>
            <li>
                创建用户
            </li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="jarviswidget" id="wid-id86fc56" data-widget-editbutton="false" data-widget-custombutton="false">

            <!-- widget div-->
            <div>
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body no-padding">

                    <form action="/admin/user/store" method="post" id="comment-form" class="smart-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="row">
                                <div class="col col-4">
                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="label">用户名</label>
                                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                                <input type="text" name="name" value="{{ old('name') }}">
                                            </label>
                                            @if ($errors->has('name'))
                                                <em for="name" class="invalid">{{ $errors->first('name') }}</em>
                                            @endif
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="label">E-mail</label>
                                            <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="email" name="email" value="{{ old('email') }}">
                                            </label>
                                            @if ($errors->has('email'))
                                            <em for="email" class="invalid">{{ $errors->first('email') }}</em>
                                            @endif
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="label">密码</label>
                                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                                <input type="password" id="password" name="password" value="{{ old('password') }}">
                                            </label>
                                            @if ($errors->has('password'))
                                            <em for="password" class="invalid">{{ $errors->first('password') }}</em>
                                            @endif
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="label">重复密码</label>
                                            <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                            </label>
                                        </section>
                                    </div>
                                </div>
                                <div class="col col-4">
									<label class="label">用户权限</label>

									<label class="toggle state-error">
                                        分类1
                                        <span class="onoffswitch">
                                            <input type="checkbox" name="category1" class="onoffswitch-checkbox" id="category1" {{ !empty(old('category1')) ? 'checked="checked"' : '' }} >
                                            <label class="onoffswitch-label" for="category1">
                                                <span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </span>
                                    </label>
									<label class="toggle state-error">
                                        分类2
                                        <span class="onoffswitch">
                                            <input type="checkbox" name="category2" class="onoffswitch-checkbox" id="category2" {{ !empty(old('category2')) ? 'checked="checked"' : '' }} >
                                            <label class="onoffswitch-label" for="category2">
                                                <span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </span>
                                    </label>
									<label class="toggle state-error">
                                        分类3
                                        <span class="onoffswitch">
                                            <input type="checkbox" name="category3" class="onoffswitch-checkbox" id="category3" {{ !empty(old('category3')) ? 'checked="checked"' : '' }} >
                                            <label class="onoffswitch-label" for="category3">
                                                <span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </span>
                                    </label>
									<label class="toggle state-error">
                                        分类4
                                        <span class="onoffswitch">
                                            <input type="checkbox" name="category4" class="onoffswitch-checkbox" id="category4" {{ !empty(old('category4')) ? 'checked="checked"' : '' }} >
                                            <label class="onoffswitch-label" for="category4">
                                                <span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </span>
                                    </label>

                                    <div class="note note-error">You must select one option.</div>
                                </div>
                            </div>
                        </fieldset>

                        <footer>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">
                                添加用户
                            </button>
                        </footer>

                        <div class="message">
                            <i class="fa fa-check fa-lg"></i>
                            <p>
                                Your comment was successfully added!
                            </p>
                        </div>
                    </form>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>


    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')
<!-- <script src="/js/plugin/jquery-form/jquery-form.min.js"></script> -->
<script type="text/javascript">

$(function(){

    $("#aside_user").addClass("open");
    $("#aside_user_").show();
    $("#aside_user_create").addClass("active");

    $("#comment-form").validate({

        rules : {
            name : {
                required : true,
                maxlength : 20
            },
            email : {
                required : true,
                maxlength : 20
            },
            password : {
                required : true,
                minlength : 4,
                maxlength : 20
            },
            password_confirmation : {
                required : true,
                equalTo:"#password"
            }
        },

        messages : {
            name : {
                required : '请输入名称',
                maxlength : '不能大于20位',
                minlength : '不能小于2位'
            },
            email : {
                required : '请输入email',
                email : '格式不正确'
            },
            password : {
                required : '请输入密码',
                maxlength : '不能大于20位',
                minlength : '不能小于2位'
            },
            password_confirmation : {
                required : '请输入密码',
                equalTo : '密码不一致'
            }
        },

        errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
        }
    });

});

</script>
@endsection
