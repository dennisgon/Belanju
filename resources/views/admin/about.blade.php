@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

@section('konten')
@parent
<form action="{{ url('test/store') }}" method="POST">
	<textarea class="form-control" name="about" rows="5" id="about">{{ $content['about'] }}</textarea>
	<input type="submit" name="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
@endsection