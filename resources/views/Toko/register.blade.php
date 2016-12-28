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
 	<div class="container" style="margin-top: 30px;">
 		
		<form action="{{ url('profile/update', Auth::user()->id) }}" method="POST">
			<div class="form-group">
				<label for="shop_name">Shop Name</label>
				<input type="text" class="form-control" id="shop_name" placeholder="Shop Name" name="shop_name" >
			</div>
			<div style="margin-bottom: 66px;">
			    <div class="col-xs-12 col-md-2" style="margin-left: 0px;padding-left: 0px;padding-right: 0px;">
			    	<label>Kartu Tanda Pengenal</label>
			    </div>    
		        <div class="col-xs-12 col-md-10">  
		            <!-- image-preview3-filename input [CUT FROM HERE]-->
		            <div class="input-group image-preview3">
		                <input type="text" class="form-control image-preview3-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
		                <span class="input-group-btn">
		                    <!-- image-preview3-clear button -->
		                    <button type="button" class="btn btn-default image-preview3-clear" style="display:none;">
		                        <span class="glyphicon glyphicon-remove"></span> Clear
		                    </button>
		                    <!-- image-preview3-input -->
		                    <div class="btn btn-default image-preview3-input">
		                        <span class="glyphicon glyphicon-folder-open"></span>
		                        <span class="image-preview3-input-title">Browse</span>
		                        <input type="file" accept="image/png, image/jpeg, image/gif" name="ktp"/> <!-- rename it -->
		                    </div>
		                </span>
		            </div><!-- /input-group image-preview [TO HERE]--> 
		        </div>
	        </div>
			<div class="form-group">
				<label for="tag_line">Shop Tag Line</label>
				<input type="text" class="form-control" id="tag_line" placeholder="Shop Tag Line" name="tag_line" >
			</div>
			<div class="form-group">
				<label for="bdate">Shop Description</label>
				<input type="text" class="form-control" id="shop_description" placeholder="Shop Description" name="shop_description">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat Pengiriman Toko</label>
				<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
			</div>
			<div class="form-group">
				<label for="pos">Kode Pos Pengiriman Toko</label>
				<input type="text" class="form-control" id="pos" placeholder="Kode Pos" name="pos" required>
			</div>
			<div class="form-group">
				<label for="provinsi">provinsi Pengiriman Toko</label>
				<input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi" readonly="readonly" required>
			</div>
			<div class="form-group">
				<label for="kota">Kota/kabupaten Pengiriman Toko</label>
				<input type="text" class="form-control" id="kota" placeholder="kota" name="kota" readonly="readonly" required>
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan Pengiriman Toko</label>
				<input type="text" class="form-control" id="kecamatan" placeholder="kecamatan" name="kecamatan" readonly="readonly" required>
			</div>
			<div class="form-group">
				<label for="kecamatan">kelurahaan Pengiriman Toko</label>
				<input type="text" class="form-control" id="kelurahaan" placeholder="kelurahaan" name="kelurahaan" readonly="readonly" required>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon Toko</label>
				<input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon" required>
			</div>
				<div style="margin-bottom: 66px;">
				    <div class="col-xs-12 col-md-2" style="margin-left: 0px;padding-left: 0px;padding-right: 0px;">
				    	<label>Gambar Toko</label>
				    </div>    
			        <div class="col-xs-12 col-md-10">  
			            <!-- image-preview-filename input [CUT FROM HERE]-->
			            <div class="input-group image-preview">
			                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
			                <span class="input-group-btn">
			                    <!-- image-preview-clear button -->
			                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
			                        <span class="glyphicon glyphicon-remove"></span> Clear
			                    </button>
			                    <!-- image-preview-input -->
			                    <div class="btn btn-default image-preview-input">
			                        <span class="glyphicon glyphicon-folder-open"></span>
			                        <span class="image-preview-input-title">Browse</span>
			                        <input type="file" accept="image/png, image/jpeg, image/gif" name="logo"/> <!-- rename it -->
			                    </div>
			                </span>
			            </div><!-- /input-group image-preview [TO HERE]--> 
			        </div>
		        </div>
	    		<div style="margin-bottom: 66px;">
	    		    <div class="col-xs-12 col-md-2" style="margin-left: 0px;padding-left: 0px;padding-right: 0px;">
	    		    	<label>Sampul Toko</label>
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
	    	                        <input type="file" accept="image/png, image/jpeg, image/gif" name="sampul"/> <!-- rename it -->
	    	                    </div>
	    	                </span>
	    	            </div><!-- /input-group image-preview2 [TO HERE]--> 
	    	        </div>
	            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Register Toko" style=" width: 100%; margin: 20px 0px;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

@endsection