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


        <div class="row">
            <article class="col-md-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-649618" data-widget-colorbutton="false" data-widget-editbutton="false">

                    <!-- widget div-->
                    <div>
                        <div class="widget-body no-padding">
                            <div class="widget-body-toolbar">

                                <div class="row">
                                    <form id="role_form" method="POST" action="/admin/user/role/store" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                <input class="form-control" name="name" placeholder="name" type="text">
                                                @if ($errors->has('name'))
                                                    <em for="title" class="invalid">{{ $errors->first('name') }}</em>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-3 col-sm-7 col-md-7 col-lg-7 text-right">

                                            <button class="btn btn-success">
                                                <i class="fa fa-plus"></i> <span class="hidden-mobile">添加角色</span>
                                            </button>

                                        </div>
                                    </form>
                                </div>



                            </div>

                            <div class="table-responsive" style="max-height:500px; overflow-y: scroll;">


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-key text-warning"></i> ID</th>
                                            <th>角色 <i class="text-danger">!</i></th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($roles) > 0)
                                        @foreach ( $roles as $role )
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->name}}</td>
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
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
            <!-- end widget -->







        </article>




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


    var $role_form = $("#role-form").validate({//表单验证
		// Rules for form validation
		rules : {
			name : {
				required : true,
				maxlength : 10
			}
		},

		// Messages for form validation
		messages : {
			name : {
				required : '请输入名称',
                maxlength : '不能大于10位',
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
