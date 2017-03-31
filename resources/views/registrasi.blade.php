@extends('layout.app')

@section('title', 'Page Title')

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

<!-- / catg header banner section -->

<!-- product category -->

<div class="container" style="margin-top: 30px; margin-bottom: 100px;">

    <form action="{{ route('toko.store') }}" method="POST" files="true" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pakaian</label>
            <select class="form-control" id="sel1">
                <option>-pilih-</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tempat Promosi</label>
            <select class="form-control" id="sel1">
                <option>-pilih-</option>
                <option></option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pos">jangka waktu</label>
            <input type="text" class="form-control" id="pos" placeholder="jangka waktu" name="pos" required>
        </div>

        <input type="submit" name="submit" value="promosikan" class="btn btn-primary btn-block">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">--}}
        {{--<div class="product-chooser-item selected">--}}
            {{--<img src="http://renswijnmalen.nl/bootstrap/desktop_mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">--}}
            {{--<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">--}}
                {{--<span class="title">Mobile and Desktop</span>--}}
                {{--<span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>--}}
                {{--<input type="radio" name="product" value="mobile_desktop" checked="checked">--}}
            {{--</div>--}}
            {{--<div class="clear"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>

</form>
</div>

</div>
<script type="text/javascript">
    $(document).on('click', '#close-preview', function(){
        $('.image-preview3').popover('hide');
        // Hover befor close the preview
        $('.image-preview3').hover(
            function () {
                $('.image-preview3').popover('show');
            },
            function () {
                $('.image-preview3').popover('hide');
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
        $('.image-preview3').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview3-clear').click(function(){
            $('.image-preview3').attr("data-content","").popover('hide');
            $('.image-preview3-filename').val("");
            $('.image-preview3-clear').hide();
            $('.image-preview3-input input:file').val("");
            $(".image-preview3-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview3-input input:file").change(function (){
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview3-input-title").text("Change");
                $(".image-preview3-clear").show();
                $(".image-preview3-filename").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview3").attr("data-content",$(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
    });
</script>
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
<script type="text/javascript">
    $(document).on('click', '#close-preview', function(){
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
                $('.image-preview').popover('show');
            },
            function () {
                $('.image-preview').popover('hide');
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
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function (){
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){

        $( "#pos" ).on('input',function(e){

            $.ajax({
                url: "https://kalarau.net/api/v1/kodepos/"+$("#pos").val(),
                type: 'GET',
                success: function(result) {
                    if (result["kodepos"][0]["kabupaten"]==null) {
                        $("#kota").val(result["kodepos"][0]["kota"]);
                    }else{
                        $("#kota").val(result["kodepos"][0]["kabupaten"]);
                    }
                    $("#provinsi").val(result["kodepos"][0]["provinsi"]);
                    $("#kecamatan").val(result["kodepos"][0]["kecamatan"]);
                    $("#kelurahaan").val(result["kodepos"][0]["kelurahan"]);

                }


            });
        });
    });
</script>
@endsection