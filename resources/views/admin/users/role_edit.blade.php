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

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
    </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="inbox-nav-bar no-content-padding">

            <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-edit"></i> 修改角色 &nbsp;</h1>

            <div class="btn-group hidden-desktop visible-tablet">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Inbox333 <i class="fa fa-caret-down"></i>
                </button>

            </div>

        </div>

        <div id="inbox-content" class="inbox-body no-content-padding">

            <div class="inbox-side-bar">

                <form id="role_form" method="POST" action="/admin/user/role/{{$role->id}}/update" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="input-group has-error">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" name="name" value="{{$role->name}}" placeholder="name" type="text">
                        @if ($errors->has('name'))
                        <em for="title" class="invalid">{{ $errors->first('name') }}</em>
                        @endif
                    </div>
                    <div class="input-group has-error">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input class="form-control" name="alias"  value="{{$role->alias}}" placeholder="alias" type="text">
                        @if ($errors->has('alias'))
                        <em for="title" class="invalid">{{ $errors->first('alias') }}</em>
                        @endif
                    </div>

                    <button class="btn btn-primary btn-block">
                        <i class="fa fa-plus"></i> <span class="hidden-mobile">修改角色</span>
                    </button>

                </form>


            </div>

            <div class="table-wrap custom-scroll animated fast fadeInRight">

                <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-649618" data-widget-colorbutton="false" data-widget-editbutton="false">

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

    var $role-form = $("#role-form").validate({//表单验证
		// Rules for form validation
        rules : {
			name : {
				required : true,
				maxlength : 10
			},
			alias : {
				required : true,
				maxlength : 10
			}
		},

		// Messages for form validation
		messages : {
			name : {
				required : '请输入名称',
                maxlength : '不能大于10位',
			},
            alias : {
                required : '请输入别名',
                maxlength : '别名不能大于10位',
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
