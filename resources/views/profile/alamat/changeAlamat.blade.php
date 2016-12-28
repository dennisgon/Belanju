@extends('layout.app')
@section('title', 'Profile')
@section('konten')
@parent
<style type="text/css">
   label {
   font-weight: normal !important;
   }
   #cart-view > div > div > div > div > div > form > div > table > tbody > tr > td > form{
   display: inline-block !important;
   }
</style>
<div class="container">
<section id="cart-view" style="margin-bottom: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cart-view-area">
          <div class="cart-view-table aa-wishlist-table">
            <form action="">
              <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>Nama Tempat</th>
                        <th>Penerima</th>
                        <th>Alamat</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Kelurahaan</th>
                        <th>Telepon</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($alamat as $alamat)
                     @if ($alamat->status == "primary")
                     <tr class="active">
                        @else
                     <tr>
                        @endif
                        <td>{{$alamat->name}}</td>
                        <td>{{$alamat->receiver}}</td>
                        <td>{{$alamat->alamat}}</td>
                        <td>{{$alamat->provinsi}}</td>
                        <td>{{$alamat->kota}}</td>
                        <td>{{$alamat->pos}}</td>
                        <td>{{$alamat->kelurahaan}}</td>
                        <td>{{$alamat->telepon}}</td>
                        <td>
                           <a alamatId="{{$alamat->id}}" class="update-button" data-toggle="modal" data-target="#squarespaceModal" ><span class="glyphicon glyphicon-edit"></span></a>
                           {{ Form::open(['method' => 'DELETE', 'route' => ['alamat.destroy', $alamat->id]]) }}
                           <button type="submit" title="menghapus alamat"style="background:none; border:none;padding:0;">
                           <span class="glyphicon glyphicon-trash"></span>
                           </button>
                           {{ Form::close() }}
      	 				@if ($alamat->status == "primary")
                           <p style="display: inline-block;" title="alamat utama"><span class="glyphicon glyphicon-check"></span></p>
                           @else
                           <a href="{{route('changeStatusAlamat', [$alamat->id,Auth::user()->id])}}" title="set alamat utama"><span class="glyphicon glyphicon-unchecked"></span></a>
                           @endif
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               </div>
            </form>             
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Cart view section -->

   <div class="row">
      <div class="table-responsive">
        {{--  <table class="table">
            <thead>
               <tr>
                  <th>Nama Tempat</th>
                  <th>Penerima</th>
                  <th>Alamat</th>
                  <th>Provinsi</th>
                  <th>Kota</th>
                  <th>Kode Pos</th>
                  <th>Kelurahaan</th>
                  <th>Telepon</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($alamat as $alamat)
               @if ($alamat->status == "primary")
               <tr class="active">
                  @else
               <tr>
                  @endif
                  <td>{{$alamat->name}}</td>
                  <td>{{$alamat->receiver}}</td>
                  <td>{{$alamat->alamat}}</td>
                  <td>{{$alamat->provinsi}}</td>
                  <td>{{$alamat->kota}}</td>
                  <td>{{$alamat->pos}}</td>
                  <td>{{$alamat->kelurahaan}}</td>
                  <td>{{$alamat->telepon}}</td>
                  <td>
                     <a alamatId="{{$alamat->id}}" class="update-button" data-toggle="modal" data-target="#squarespaceModal" ><span class="glyphicon glyphicon-edit"></span></a>
                     {{ Form::open(['method' => 'DELETE', 'route' => ['alamat.destroy', $alamat->id]]) }}
                     <button type="submit" title="menghapus alamat"style="background:none; border:none;padding:0;">
                     <span class="glyphicon glyphicon-trash"></span>
                     </button>
                     {{ Form::close() }}
	 				@if ($alamat->status == "primary")
                     <a href="#"><span class="glyphicon glyphicon-check"></span></a>
                     @else
                     <a href="#"><span class="glyphicon glyphicon-unchecked"></span></a>
                     @endif
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
 --}}
         {{-- Modal --}}
         <!-- line modal -->
         <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                     <h3 class="modal-title" id="lineModalLabel"></h3>
                  </div>
                  <div class="modal-body">
                     <!-- content goes here -->
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
                     		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                     	
                  </div>
                  <div class="modal-footer">
                     <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                        </div>
                        <div class="btn-group btn-delete hidden" role="group">
                           <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                        </div>
                        <div class="btn-group" role="group">
                           <button type="{{route('alamat.update', 1)}}" id="saveData" class="btn btn-default btn-hover-green" data-action="save" role="button" alamatId="">Save</button>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#saveData").click(function () {
			$.ajax({
				url: "/profile/alamat/"+$("#saveData").attr("alamatId"),
				type: 'POST',
				data: {

					'_method': 'PUT',
					'_token': $('input[name=_token]').val(),
					'nama':$("#nama").val(),
					'receiver':$("#receiver").val(),
					'alamat':$("#alamat").val(),
					'pos':$("#pos").val(),
					'provinsi':$("#provinsi").val(),
					'kota':$("#kota").val(),
					'kecamatan':$("#kecamatan").val(),
					'kelurahaan':$("#kelurahaan").val(),
					'telepon':$("#telepon").val()
				},beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
				success: function(result) {
					location.reload(); 
				}
			})
		});
		$(".update-button").click(function () {
			$.ajax({
			url: "/profile/alamat/"+$(this).attr('alamatId')+"/edit",
			type: 'GET',
			success: function(result) {
				$("#lineModalLabel").text(result["name"]);
				$("#nama").val(result["name"]);
				$("#receiver").val(result["receiver"]);
				$("#alamat").val(result["alamat"]);
				$("#pos").val(result["pos"]);
				$("#provinsi").val(result["provinsi"]);
				$("#kota").val(result["kota"]);
				$("#kecamatan").val(result["kecamatan"]);
				$("#kelurahaan").val(result["kelurahaan"]);
				$("#telepon").val(result["telepon"]);
				$("#saveData").attr("alamatId", result["id"]);

			}
			});
		});
		$( "#pos" ).on('input',function(e){
		 		
				$.ajax({
				url: "https://kalarau.net/api/v1/kodepos/"+$("#pos").val(),
				type: 'GET',
				success: function(result) {
					if (result["kodepos"]["kabupaten"]==null) {
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