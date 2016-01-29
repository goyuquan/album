@extends('admin.layouts.admin')

@section('style')

<style media="screen">
    .jarviswidget {
        border-top: 1px solid #ccc;
    }
</style>

@endsection

@section('content')

<!-- MAIN PANEL -->
<div id="main" role="main">


    <!-- RIBBON -->
    <div id="ribbon">


        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>
                控制台
            </li>
            <li>
                分类管理
            </li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="inbox-nav-bar no-content-padding">

            <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> 添加角色 &nbsp;</h1>

            <div class="btn-group hidden-desktop visible-tablet">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Inbox333 <i class="fa fa-caret-down"></i>
                </button>

            </div>

        </div>

        <div id="inbox-content" class="inbox-body no-content-padding">

            <div class="inbox-side-bar">

                <form id="role_form" class="smart-form" method="POST" action="/admin/user/role/store" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <section>
                        <label class="input">
                            <i class="icon-prepend fa fa-user"></i>
                            <input name="name" placeholder="name" type="text">
                        </label>
                        @if ($errors->has('name'))
                        <em for="title" class="invalid">{{ $errors->first('name') }}</em>
                        @endif
                    </section>
                    <section>
                        <label class="input">
                            <i class="icon-prepend fa fa-search"></i>
                            <input name="alias" placeholder="alias" type="text">
                        </label>
                        @if ($errors->has('alias'))
                        <em for="title" class="invalid">{{ $errors->first('alias') }}</em>
                        @endif
                    </section>

                    <button type="submit" class="btn btn-primary btn-block" style="height:2.4em">
                        <i class="fa fa-plus"></i>添加角色
                    </button>


                </form>


            </div>

            <div class="table-wrap custom-scroll animated fast fadeInRight">

                <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-6gf618" data-widget-colorbutton="false" data-widget-editbutton="false">

                    <!-- widget div-->
                    <div>
                        <div class="widget-body no-padding">
                            <div class="table-responsive" style="max-height:500px; overflow-y: scroll;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-key text-warning"></i> ID</th>
                                            <th>角色</th>
                                            <th>别名</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($roles) > 0)
                                        @foreach ( $roles as $role )
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>{{$role->alias}}</td>
                                            <td class="hidden-xs hidden-sm">
                                                <div class="btn-group">
                                                    <a href="/admin/user/role/{{ $role->id }}/edit"> <i class="fa fa-edit" style="font-size:24px;"></i>
                                                    </a>
                                                    <a href="/admin/user/role/{{ $role->id }}/destroy" class="role_destroy"> <i class="fa fa-times" style="font-size:24px;"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END MAIN CONTENT -->

    </div>
<!-- END MAIN PANEL -->




@endsection

@section('script')
<script src="/js/plugin/jquery-form/jquery-form.min.js"></script>
<script type="text/javascript">
$(function(){

    $("#aside_user").addClass("open");
    $("#aside_user_").show();
    $("#aside_user_roles").addClass("active");

    //角色删除确认
    $('.role_destroy').click(function(e) {
		//get the link
        console.log($(this));
		var $this = $(this);
		$.destroyURL = $this.attr('href');
		$.destroyMSG = $this.data('logout-msg');

		// ask verification
		$.SmartMessageBox({
			title : "<i class='fa fa-exclamation-triangle txt-color-orangeDark'></i> 危险操作 !",
			content : $.destroyMSG || "删除角色会影响到关联用户",
			buttons : '[取消][确认删除]'

		}, function(ButtonPressed) {
			if (ButtonPressed == "确认删除") {
				$.root_.addClass('animated fadeOutDown');
				role_destroy();
			}

		});
		e.preventDefault();
	});

    function role_destroy() {
		window.location = $.destroyURL;
	}

    var role = $("#role_form").validate({
        
		rules : {
			name : {
				required : true,
				maxlength : 20
			},
			alias : {
				required : true,
				maxlength : 20
			}
		},

		messages : {
			name : {
				required : '请输入名称',
                maxlength : '不能大于20位',
			},
            alias : {
                required : '请输入别名',
                maxlength : '别名不能大于20位',
            }
		},

		// Do not change code below
		errorPlacement : function(error, element) {
			error.insertAfter(element.parent());
		}
	});

})

</script>


@endsection
