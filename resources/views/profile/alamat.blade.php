@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
 @parent
 <div class="container-fluid " style="width: 50%; margin-bottom: 100px; margin-top: 40px;">
	  <div class="row">
	     	<h2 style="margin:20px;">Add Alamat</h2>
	         <div class="btn-group btn-breadcrumb" style="margin:20px;">
	             <a href="{{ route('home') }}" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
	             <a href="{{ route('profile', Auth::user()->id) }}" class="btn btn-primary">Profile</a>
	             <a href="#" class="btn btn-primary">Alamat</a>
	         </div>
	 	</div>
	<div class="well well-lg" style="background-color:#F5F5F5;">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Nama Tempat" name="nama" required>
			</div>
			<div class="form-group">
				<label for="receiver">Penerima</label>
				<input type="text" class="form-control" id="receiver" placeholder="Penerima" name="receiver" required>
			</div>
			<div class="form-group">
				<label for="address">Alamat</label>
				<input type="text" class="form-control" id="address" placeholder="Alamat" name="address" required>
			</div>
			<div class="form-group">
				<label for="postal">Kode Pos</label>
				<input type="text" class="form-control" id="postal" placeholder="Kode Pos" name="postal" required>
			</div>
			<div class="form-group">
				<label for="provinsi">provinsi</label>
				<input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi" disabled required>
			</div>
			<div class="form-group">
				<label for="kota">Kota/kabupaten</label>
				<input type="text" class="form-control" id="kota" placeholder="kota" name="kota" disabled required>
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<input type="text" class="form-control" id="kecamatan" placeholder="kecamatan" name="kecamatan" disabled required>
			</div>
			<div class="form-group">
				<label for="kecamatan">Kelurahaan</label>
				<input type="text" class="form-control" id="kelurahaan" placeholder="kelurahaan" name="kelurahaan" disabled required>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon" required>
			</div>
				<input type="submit" name="submit" class="btn btn-primary btn-block">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>	
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$( "#postal" ).on('input',function(e){
		 		
				$.ajax({
				url: "https://kalarau.net/api/v1/kodepos/"+$("#postal").val(),
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