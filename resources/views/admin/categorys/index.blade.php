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

            <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> 添加角色 &nbsp;</h1>

            <div class="btn-group hidden-desktop visible-tablet">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Inbox333 <i class="fa fa-caret-down"></i>
                </button>

            </div>

        </div>

        <div id="inbox-content" class="inbox-body no-content-padding">

            <div class="inbox-side-bar">

                <form id="category_form" class="smart-form" method="POST" action="/admin/category/store" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="parent_id">

                    @if (count($categorys) > 0)
                    <div class="row">
                        <section class="col col-3">
                            <div id="parent_select" class="dropdown">
                                <a id="dLabel" role="button" name="{{App\Category::find(1)->id}}" data-toggle="dropdown" class="btn btn-primary btn-sm" data-target="#" href="javascript:void(0);">
                                    <i class="fa fa-code-fork"></i>      {{App\Category::find(1)->name}}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                    @foreach ( $categorys as $category )
                                        @if ( $category->parent_id === 1 )
                                            <li>
                                                <a href="javascript:void(0);" class="item" name="{{$category->id}}">{{ $category->name }}</a>
                                                @if ( !App\Category::where('parent_id',$category->id)->get()->isEmpty() )
                                                    <ul class="dropdown-menu">
                                                        @foreach ( $categoryss as $category_ )
                                                        @if ($category_->parent_id === $category->id)
                                                        <li>
                                                            <a href="javascript:void(0);" class="item" name="{{$category_->id}}">
                                                                {{$category_->name}}
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>

                        </section>
                    </div>
                    @endif

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
                            <i class="icon-prepend fa fa-font"></i>
                            <input name="alias" placeholder="alias" type="text">
                        </label>
                        @if ($errors->has('alias'))
                        <em for="title" class="invalid">{{ $errors->first('alias') }}</em>
                        @endif
                    </section>

                    <button type="submit" class="btn btn-primary btn-block" style="height:2.4em">
                        <i class="fa fa-plus"></i>添加类别
                    </button>


                </form>


            </div>

            <div class="table-wrap custom-scroll animated fast fadeInRight">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-orange" id="wid-id-sdegwerds0" data-widget-editbutton="false">

                <!-- widget div-->
                <div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body">
                        @if (count($categorys) > 0)
                        <div class="tree">
                            <ul>
                                <li name="{{App\Category::find(1)->id}}">
                                    <span><i class="fa fa-lg fa-calendar"></i> &ndash;&ndash;{{App\Category::find(1)->name}}</span>
                                    <ul>
                                        @foreach ( $categorys as $category )
                                            @if ( $category->parent_id === 1 )
                                            <li>
                                                <span class="label label-success">
                                                    <i class="fa fa-lg fa-plus-circle"></i>
                                                     {{ $category->name }}
                                                 </span>
                                                 &ndash;
                                                <a href="/admin/category/{{$category->id}}/edit">编辑</a>
                                                 &ndash;
                                                <a href="/admin/category/{{$category->id}}/destroy" class="destroy">删除</a>

                                                @if ( !App\Category::where('parent_id',$category->id)->get()->isEmpty() )
                                                    <ul>
                                                        @foreach ( $categoryss as $category_ )
                                                        @if ($category_->parent_id === $category->id)
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-clock-o"></i> {{$category_->name}}
                                                            </span>
                                                            &ndash;
                                                           <a href="/admin/category/{{$category_->id}}/edit">编辑</a>
                                                            &ndash;
                                                           <a href="/admin/category/{{$category_->id}}/destroy" class="destroy">删除</a>
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
							<!-- end widget -->


            </div>

        </div>


    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')

<script type="text/javascript">
$(function(){

    $("#aside_category").addClass("active");//导航菜单样式


    $("#parent_select ul a:not('.parent-item')").click(function(){
        $("input[name='parent_id']").val($(this).attr("name"));
        $("#dLabel").html("<i class='fa fa-gear'></i>   "+$(this).text()+"   <span class='caret'></span>");
    });


    $('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
    $('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(':visible')) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
        }
        e.stopPropagation();
    });


    $(".dropdown-menu").parent("li").addClass("dropdown-submenu");//给分类列表父元素加dropdown-submenu类

    //角色删除确认
    $('.destroy').click(function(e) {
        var $this = $(this);
        $.destroyURL = $this.attr('href');
        $.destroyMSG = $this.data('logout-msg');

        // ask verification
        $.SmartMessageBox({
            title : "<i class='fa fa-exclamation-triangle txt-color-orangeDark'></i> 危险操作 !",
            content : $.destroyMSG || "删除分类会影响到关联用户",
            buttons : '[取消][确认删除]'

        }, function(ButtonPressed) {
            if (ButtonPressed == "确认删除") {
                $.root_.addClass('animated fadeOutDown');
                category_destroy();
            }

        });
        e.preventDefault();
    });

    function category_destroy() {
        window.location = $.destroyURL;
    }


    $("#category_form").validate({
		rules : {
			name : {
				required : true,
				minlength : 2,
				maxlength : 20
			},
            alias : {
                required : true,
                minlength : 2,
                maxlength : 20
            }

		},

		messages : {
    			name : {
    				required : '请输入名称',
                    maxlength : '不能大于20位',
                    minlength : '不能小于2位'
    			},
                alias : {
                    required : '请输入别名',
                    maxlength : '不能大于20位',
                    minlength : '不能小于2位'
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
