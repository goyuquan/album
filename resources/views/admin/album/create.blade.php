@extends('admin.layouts.admin')

@section('style')

<style media="screen">
.dropzone .dz-preview .dz-details, .dropzone-previews .dz-preview .dz-details {
    min-width: 1em;
    height: 2em;
    background: none;
}
#type_select,#display_select {
    display: inline-block;
}
#album_form footer {
    padding:0;
}
#album_form footer button{
    margin:0;
}
</style>

@endsection

@section('content')

@include('common.thumbnail')

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
                内容管理
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
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-pencil-square-o fa-fw "></i>
                    Forms
                    <span>>
                        Dropzone
                    </span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>




        <!-- widget grid -->
        <section id="widget-grid" class="">
            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-5h55" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>album Create </h2>

                        </header>
                        <div>
                            <div class="jarviswidget-editbox"> </div>
                            <div class="widget-body no-padding">

                                <form id="album_form" class="smart-form" novalidate="novalidate" method="POST" action="/admin/album/store" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="thumbnail">
                                    <input type="hidden" name="category">
                                    <input type="hidden" name="display">

                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-3">
                                                <label class="input">
                                                    <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="title" placeholder="标题">
                                                </label>
                                            </section>
                                            <section class="col col-3">
                                                <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                    <input type="text" name="published_at" placeholder="选择发布时间" class="datepicker" value="{{ old('published_at') }}" data-dateformat="yy-mm-dd">
                                                </label>
                                                @if ($errors->has('published_at'))
                                                <em>{{ $errors->first('published_at') }}</em>
                                                @endif
                                            </section>
                                            <section class="col col-6">
                                                <div id="type_select" class="dropdown inline_block">
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
                                                <div id="display_select" class="dropdown inline_block">
                                                    <a id="dLabel2" role="button" name="{{App\display::find(1)->id}}" data-toggle="dropdown" class="btn btn-primary btn-sm" data-target="#" href="javascript:void(0);">
                                                        <i class="fa fa-code-fork"></i>      {{App\display::find(1)->name}}
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu multi-level" role="menu">
                                                        @foreach ( $displays as $display )
                                                            @if ( $display->parent_id === 1 )
                                                                <li>
                                                                    <a href="javascript:void(0);" class="item" name="{{$display->id}}">{{ $display->name }}</a>
                                                                    @if ( !App\Display::where('parent_id',$display->id)->get()->isEmpty() )
                                                                        <ul class="dropdown-menu">
                                                                        @foreach ( $displayss as $display_ )
                                                                            @if ($display_->parent_id === $display->id)
                                                                                <li>
                                                                                    <a href="javascript:void(0);" class="item" name="{{$display_->id}}">
                                                                                        {{$display_->name}}
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

                                                    <a data-toggle="modal" href="#myModal" id="upload_bt0" class="btn btn-warning btn-sm"><i class="fa fa-upload"></i>     缩略图</a>
                                                </div>

                                            </section>
                                        </div>

                                        <section>
                                            <label class="textarea">
                                                <textarea rows="2" name="content" placeholder="描述"></textarea>
                                            </label>
                                        </section>
                                    </fieldset>


                                    <footer>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            提交
                                        </button>
                                    </footer>
                                </form>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- END COL -->

            </div>


            </article>
        </div>
</div>
<!-- END MAIN PANEL -->

@endsection

@section('script')
<script src="/js/thumbnail.js"></script>
<script type="text/javascript">

$(function(){

    $("#aside_album").addClass("open");
    $("#aside_album_").show();
    $("#aside_album_create").addClass("active");


    // 分类点击赋值
    $("#type_select ul a:not('.parent-item')").click(function(){
        $("input[name='category']").val($(this).attr("name"));
        $("#dLabel").html("<i class='fa fa-gear'></i>   "+$(this).text()+"   <span class='caret'></span>");
    });

    // 显示页面设置
    $("#display_select ul a:not('.parent-item')").click(function(){
        $("input[name='display']").val($(this).attr("name"));
        $("#dLabel2").html("<i class='fa fa-gear'></i>   "+$(this).text()+"   <span class='caret'></span>");
    });

    //media收起保存
    $("#media_bt").click(function(){
        if (!$(this).hasClass("collapsed")) {
            $("#media_content").val($("#summernote2 .note-editable").html());
        }
    });

    $(".dropdown-menu").parent("li").addClass("dropdown-submenu");//给分类列表父元素加dropdown-submenu类

    //表单验证
    var $album_form = $("#album_form").validate({
		rules : {
			title : {
				required : true,
				minlength : 2,
				maxlength : 200
			},
			category : {
				required : true,
			}
		},

		// Messages for form validation
		messages : {
			title : {
				required : '请输入标题',
                minlength : '不能小于2位',
                maxlength : '不能大于200位',
			},
			category : {
				required : '请选择分类'
			}
		},

		// Do not change code below
		errorPlacement : function(error, element) {
			error.insertAfter(element.parent());
		}
	});

});

</script>

@endsection