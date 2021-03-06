@extends('admin.layouts.admin')

@section('style')

<style media="screen">
    #media_body {
        min-height: 41px;
    }
    #type_select,#display_select {
        display: inline-block;
    }
    #wid-id-32 {
        margin-bottom: 1em;
    }
    #wid-id-1g {
        margin-bottom: 1em;
    }
    #summernote2,#summernote2 div[role="content"] {
        padding: 0;
        margin-bottom: 0;
    }
    .jarviswidget {
        border-top: 1px solid #ccc;
    }
</style>

@endsection

@section('content')

@include('common.upload')
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


    </div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="page-title txt-color-blueDark">

                <i class="fa-fw fa fa-pencil-square-o"></i> 内容管理 <span>> 新建文章 </span>
            </h1>
        </div>
    </div>

    <section id="widget-grid">
        <div class="row">
            <article class="col-sm-12 col-md-12 col-lg-12">
                <div class="jarviswidget" id="wid-id-khg" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="true">
                    <div>
                        <div class="widget-body no-padding">
                            <form id="create_form" class="smart-form" novalidate="novalidate" method="POST" action="/admin/article/store" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="thumbnail">
                                <input type="hidden" name="display">
                                <textarea id="input_content" class="hidden" name="content"></textarea>

                                        <fieldset>
                                            <section>
                                                <label class="input">
                                                    <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="title" value="{{ old('title') }}" placeholder="文章标题">
                                                </label>
                                                @if ($errors->has('title'))
                                                    <em for="title" class="invalid">{{ $errors->first('title') }}</em>
                                                @endif
                                            </section>
                                            <!-- 标题结束 -->

                                            <div class="row">
                                                <section class="col col-3">
                                                    <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                        <input type="text" name="published_at" placeholder="选择发布时间" class="datepicker" value="{{ old('published_at') }}" data-dateformat="yy-mm-dd">
                                                    </label>
                                                    @if ($errors->has('published_at'))
                                                    <em>{{ $errors->first('published_at') }}</em>
                                                    @endif
                                                </section>
                                                <div class="col col-1">
                                                    <a data-toggle="modal" href="#myModal" id="upload_bt0" class="btn btn-warning btn-sm"><i class="fa fa-upload"></i>     缩略图</a>
                                                </div>
                                                <section class="col col-8">
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
                                                    </div>

                                                </section>
                                            </div>
                                        </fieldset>
                                </div>
                            </div>
                        </div>


                        <div class="jarviswidget jarviswidget-color-blue" id="summernote" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-collapsed="false" data-widget-sortable="false">
            				<header>
            					<span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            					<h2>网页内容编辑器</h2>

            				</header>

            				<!-- widget div-->
            				<div>

            					<!-- widget edit box -->
            					<div class="jarviswidget-editbox">
            					</div>
            					<div class="widget-body no-padding">

            						<div class="web_area">

            						</div>

            						<div class="widget-footer smart-form">

                                    <div class="btn-group">
                                        <button id="summernote_save" class="btn btn-sm btn-success" type="button">
                                            <i class="fa fa-check"></i> 保存
                                        </button>
                                    </div>
            						<div class="btn-group">
            							<button id="summernote_clear" class="btn btn-sm btn-primary" type="button">
            								<i class="fa fa-times"></i> 清空
            							</button>
            						</div>

            						</div>

            					</div>
            					<!-- end widget content -->

            				</div>
            				<!-- end widget div -->

            			</div>

                        <!-- <div class="jarviswidget jarviswidget-color-blue" id="markdown" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="true">
                            <header>
                                <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                <h2>文本内容编辑器</h2>
                            </header>
                            <div>
                                <div class="jarviswidget-editbox">
                                </div>
                                <div class="widget-body no-padding">
                                    <textarea id="text_area" name="content" class="custom-scroll" style="max-height:180px;"> {{ old('content') }} </textarea>
                                    @if ($errors->has('content'))
                                    <strong>{{ $errors->first('content') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div> -->


                    </article>
        </div>
    </section>
    <!-- end widget grid -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <input type="submit" id="submit" class="btn btn-primary btn-lg btn-block" value="提交     submit">

    </form>

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')
<script src="/js/upload.js"></script>
<script src="/js/plugin/summernote/summernote.js"></script>
<script src="/js/plugin/markdown/markdown.min.js"></script>
<script src="/js/plugin/markdown/to-markdown.min.js"></script>
<script src="/js/plugin/markdown/bootstrap-markdown.min.js"></script>
<script src="/js/plugin/jquery-form/jquery-form.min.js"></script>

<script>
$(function(){

    $("#aside_article").addClass("open");
    $("#aside_article_").show();
    $("#aside_article_add").addClass("active");

    $("#text_area").markdown({
        autofocus:false,
        savable:false
    });

    $('.web_area').summernote({
		height : 280,
		focus : false,
		tabsize : 2
	});

    $('#media_edit').summernote({
        height : 180,
        focus : false,
        tabsize : 2
    });

    $("#summernote textarea").attr("name","content");
    $('#summernote #summernote_save').addClass("disabled");
    $('#summernote #summernote_clear').addClass("disabled");

    $(".note-editable").keyup(function(){
        if ($(this).html() != "") {
            $("#summernote").removeClass("jarviswidget-color-greenDark jarviswidget-color-redLight").addClass("jarviswidget-color-blue");
            $('#summernote #summernote_save').removeClass("disabled");
            $('#summernote #summernote_clear').removeClass("disabled");
        } else {
            $('#summernote #summernote_save').addClass("disabled");
            $('#summernote #summernote_clear').addClass("disabled");
        }
    });

    $('#summernote #summernote_save').click(function(){
        $("#summernote").removeClass("jarviswidget-color-blue").addClass("jarviswidget-color-greenDark");
        $("#input_content").val($("#summernote .note-editable").html());
        $('#summernote #summernote_save').addClass("disabled");
        $('#summernote #summernote_clear').addClass("disabled");
    });

    $('#summernote #summernote_clear').click(function(){
        $("#input_content").empty();
        $(".note-editable").empty();
        $('#summernote #summernote_save').addClass("disabled");
        $(this).addClass("disabled");
    });

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

    var $creat_form = $("#create_form").validate({//表单验证
		// Rules for form validation
		rules : {
			title : {
				required : true,
				minlength : 5,
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
                minlength : '不能小于5位',
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

    $("#create_form").submit(function(){//文本域验证

        if ($("#input_content").val() == "") {
            $("#summernote").removeClass("jarviswidget-color-blue").addClass("jarviswidget-color-redLight");
            $("#summernote h2").text("内容不能为空");
            return false;
        }
    });


});
</script>

@endsection
