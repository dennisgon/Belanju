@extends('layout.app')

@section('title', 'Add Alamat')
 
@section('konten')
 @parent
 <div class="container-fluid " style="background-color: #F5F5F5;">
	  <div class="row">
	  		<div class="col-md-12">
		     	<h2 style="margin:20px;">Tambah Alamat</h2>
		         <div class="btn-group btn-breadcrumb" style="margin:20px;">
		             <a href="{{ route('home') }}" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
		             <a href="{{ route('profile', Auth::user()->id) }}" class="btn btn-primary">Profile</a>
		             <a href="#" class="btn btn-primary">Alamat</a>
		         </div>
	 		</div>
			<div class="col-md-4">
				<form action="{{route('alamat.store')}}" method="POST">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="Nama Tempat" name="nama" required>
					</div>
					<div class="form-group">
						<label for="receiver">Penerima</label>
						<input type="text" class="form-control" id="receiver" placeholder="Penerima" name="receiver" required>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
					</div>
					<div class="form-group">
						<label for="pos">Kode Pos</label>
						<input type="text" class="form-control" id="pos" placeholder="Kode Pos" name="pos" required>
					</div>
					<div class="form-group">
						<label for="provinsi">provinsi</label>
						<input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi" readonly="readonly" required>
					</div>
					<div class="form-group">
						<label for="kota">Kota/kabupaten</label>
						<input type="text" class="form-control" id="kota" placeholder="kota" name="kota" readonly="readonly" required>
					</div>
					<div class="form-group">
						<label for="kecamatan">Kecamatan</label>
						<input type="text" class="form-control" id="kecamatan" placeholder="kecamatan" name="kecamatan" readonly="readonly" required>
					</div>
					<div class="form-group">
						<label for="kecamatan">Kelurahaan</label>
						<input type="text" class="form-control" id="kelurahaan" placeholder="kelurahaan" name="kelurahaan" readonly="readonly" required>
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
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$( "#pos" ).on('input',function(e){
		 		
				$.ajax({
				url: "http://kalarau.net/api/v1/kodepos/"+$("#pos").val(),
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