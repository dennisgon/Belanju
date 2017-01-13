@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

@section('konten')
    @parent
    <style type="text/css">
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }
        .image-preview2-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview2-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview2-input-title {
            margin-left:2px;
        }
        .image-preview3-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview3-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview3-input-title {
            margin-left:2px;
        }
    </style>
    <form action="{{route('pengiriman.store')}}" method="POST" files="true" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nama">Nama Jasa Kurir</label>
            <input type="text" name="namaPengiriman" class="form-control" id="namaPengiriman" placeholder="nama jasa kurir">
        </div>
        <div style="margin-bottom: 66px;">
            <div class="col-xs-12 col-md-2" style="margin-left: 0px;padding-left: 0px;padding-right: 0px;">
                <label>Gambar Layout</label>
            </div>
            <div class="col-xs-12 col-md-10">
                <!-- image-preview-filename input [CUT FROM HERE]-->
                <div class="input-group image-preview2">
                    <input type="text" class="form-control image-preview2-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
	    	                    <!-- image-preview2-clear button -->
	    	                    <button type="button" class="btn btn-default image-preview2-clear" style="display:none;">
	    	                        <span class="glyphicon glyphicon-remove"></span> Clear
	    	                    </button>
                        <!-- image-preview2-input -->
	    	                    <div class="btn btn-default image-preview2-input">
	    	                        <span class="glyphicon glyphicon-folder-open"></span>
	    	                        <span class="image-preview2-input-title">Browse</span>
	    	                        <input type="file" accept="image/png, image/jpeg, image/gif" name="gambar"/> <!-- rename it -->
	    	                    </div>
	    	                </span>
                </div><!-- /input-group image-preview2 [TO HERE]-->
            </div>
            <input type="submit"/>
        </div>


    </form>
    <script type="text/javascript">
        $(document).on('click', '#close-preview', function(){
            $('.image-preview2').popover('hide');
            // Hover befor close the preview
            $('.image-preview2').hover(
                function () {
                    $('.image-preview2').popover('show');
                },
                function () {
                    $('.image-preview2').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview2').popover({
                trigger:'manual',
                html:true,
                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                content: "There's no image",
                placement:'bottom'
            });
            // Clear event
            $('.image-preview2-clear').click(function(){
                $('.image-preview2').attr("data-content","").popover('hide');
                $('.image-preview2-filename').val("");
                $('.image-preview2-clear').hide();
                $('.image-preview2-input input:file').val("");
                $(".image-preview2-input-title").text("Browse");
            });
            // Create the preview image
            $(".image-preview2-input input:file").change(function (){
                var img = $('<img/>', {
                    id: 'dynamic',
                    width:250,
                    height:200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                    $(".image-preview2-input-title").text("Change");
                    $(".image-preview2-clear").show();
                    $(".image-preview2-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview2").attr("data-content",$(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection