@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

@section('konten')
@parent
<form action="{{ url('admin/contact/store') }}" method="POST">
	<div class="form-group"> 
		<label for="alamat">Alamat</label>
		<textarea class="form-control" name="alamat" rows="5" id="alamat">{{ $content['Alamat'] }}</textarea>
	</div>
	<div class="form-group">
	  <label for="notelp">Nomor Telephone</label>
	  <input type="text" name="notelp" class="form-control" id="notelp" placeholder="Nomor Telephone" value="{{ $content['noTelepon'] }}">
	</div>
	<div class="form-group">
	  <label for="E-mail">E-mail</label>
	  <input type="email" name="Email" class="form-control" id="E-mail" placeholder="E-mail" value="{{ $content['email'] }}">
	</div>
	<div class="form-group">
	  <label for="facebook">Facebook</label>
	  <div class="input-group input-icon right">
	  	<span class="input-group-addon">
	  		<i class="fa fa-facebook-square"></i>
	  	</span>
	  	<input type="text" name="facebook" class="form-control1" placeholder="facebook" id="facebook" value="{{ $content['facebook'] }}">
	  </div>
	</div>
	<div class="form-group">
	  <label for="twitter">Twitter</label>
	  <div class="input-group input-icon right">
	  	<span class="input-group-addon">
	  		<i class="fa fa-twitter-square"></i>
	  	</span>
	  	<input type="text" name="twitter" class="form-control1" placeholder="Twitter" id="twitter" value="{{ $content['twitter'] }}">
	  </div>
	</div>
	<div class="form-group">
	  <label for="googleplus">Google+</label>
	  <div class="input-group input-icon right">
	  	<span class="input-group-addon">
	  		<i class="fa fa-google-plus-square"></i>
	  	</span>
	  	<input type="text" name="googleplus" class="form-control1" placeholder="Google+" id="googleplus" value="{{ $content['googlePlus'] }}">
	  </div>
	</div>
	<div class="form-group">
	  <label for="youtube">Youtube</label>
	  <div class="input-group input-icon right">
	  	<span class="input-group-addon">
	  		<i class="fa fa-youtube-square"></i>
	  	</span>
	  	<input type="text" name="youtube" class="form-control1" placeholder="Youtube" id="youtube" value="{{ $content['youtube'] }}">
	  </div>
	</div>
	<input type="submit" name="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection