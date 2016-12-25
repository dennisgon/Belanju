@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

@section('konten')
@parent
<form action="{{ url('admin/logotemplate/store') }}" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	  <label for="exampleInputFile">Image Logo</label>
	  <img src="{{ asset($content['logo']) }}">
	  <input type="file" id="exampleInputFile" name="logo" value="{{ $content['logo'] }}">
	  <p class="help-block">Logo Image</p>
	</div>
	<div class="form-group">
	  <label for="theme">Theme:</label>
	  <select class="form-control" id="theme" name="theme">
	  	<option>{{ $content['theme'] }}</option>
	    <option>bridge-theme.css</option>
	    <option>dark-red-theme.css</option>
	    <option>default-theme.css</option>
	    <option>lite-blue-theme.css</option>
	    <option>orange-theme.css</option>
	    <option>pink-theme.css</option>
	    <option>purple-theme.css</option>
	    <option>red-theme.css</option>
	    <option>yellow-theme.css</option>
	  </select>
	</div>
	<input type="submit" name="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection