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
                                <div class="col col-6">
                                    <div class="row">
                                        <section class="col col-10">
                                            <label class="label">用户名</label>
                                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                                <input type="text" name="name">
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
                                                <input type="email" name="email">
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
                                                <input type="password" name="password">
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
                                                <input type="password" name="password_confirmation">
                                            </label>
                                            @if ($errors->has('password_confirmation'))
                                            <em for="password_confirmation" class="invalid">{{ $errors->first('password_confirmation') }}</em>
                                            @endif
                                        </section>
                                    </div>
                                </div>
                                <div class="col col-4">
									<label class="label">用户权限</label>
                                    @if (count($roles) > 0)
                                    @foreach ($roles as $role)
									<label class="toggle state-error">
                                        {{$role->name}}
                                        <span class="onoffswitch">
                                            <input type="checkbox" name="{{ $role->alias }}" class="onoffswitch-checkbox" id="role{{ $role->id }}" >
                                            <label class="onoffswitch-label" for="role{{ $role->id }}">
                                                <span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </span>
                                    </label>
                                    @endforeach
                                    @endif
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

    var a = $("#comment-form").validate({

        rules : {
            name : {
                required : true,
                maxlength : 20
            },
            email : {
                required : true,
                maxlength : 20
            }
        },

        messages : {
            name : {
                required : '请输入名称',
                maxlength : '不能大于20位',
            },
            email : {
                required : '请输入别名',
                maxlength : '别名不能大于20位',
            }
        },

        errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
        }
    });

});

</script>
@endsection
