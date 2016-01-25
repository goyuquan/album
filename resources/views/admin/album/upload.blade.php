<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        {{sha1(time().time())}}
        <form class="dropzone" id="my-awesome-dropzone"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="file" name="file" style="display:none;"/>
            <input type="hidden" name="album" value="{{$album->id}}">
            <input type="hidden" id="thumb" name="thumb" value="">
        </form>
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/plugin/dropzone/dropzone.min.js"></script>
    <script type="text/javascript">
    // Dropzone
    var a;
    $(function(){
        var m = $("#my-awesome-dropzone").dropzone({
            url: "/admin/album/upload/uploadstore",
            maxFilesize: 1,
            autoProcessQueue: false,
            addRemoveLinks: true,
            thumbnailWidth: 150,
            thumbnailHeight: 150,
            dictFileTooBig:"文件太大了",
            dictCancelUpload: "取消",
            dictRemoveFile: "删除",
            thumbnail: function(dataUrl, thumb) {
                $('#thumb').val('thumb');
                console.log(this.processQueue());
                // return thumb;
            }
         });
    });

    // var dropzone = new Dropzone('#my-awesome-dropzone', {
    //
    //     previewTemplate: document.querySelector('#preview-template').innerHTML,
    //     parallelUploads: 2,
    //     thumbnailHeight: 100,
    //     thumbnailWidth: 100,
    //     maxFilesize: 3,
    //     filesizeBase: 1000,
    //     thumbnail: function(file, dataUrl) {
    //       if (file.previewElement) {
    //         file.previewElement.classList.remove("dz-file-preview");
    //         var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
    //         for (var i = 0; i < images.length; i++) {
    //           var thumbnailElement = images[i];
    //           thumbnailElement.alt = file.name;
    //           thumbnailElement.src = dataUrl;
    //         }
    //         setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
    //       }
    //     }
    //
    // });

    </script>
    </body>
</html>
