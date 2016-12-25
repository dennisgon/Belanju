@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
 @parent
	<form action="{{ url('profile/update', Auth::user()->id) }}" method="POST">
		<div class="form-group">
			<label for="shop_name">Shop Name</label>
			<input type="text" class="form-control" id="shop_name" placeholder="Shop Name" name="shop_name" >
		</div>
		<div class="form-group">
			<label for="tag_line">Shop Tag Line</label>
			<input type="text" class="form-control" id="tag_line" placeholder="Shop Tag Line" name="tag_line" >
		</div>
		<div class="form-group">
			<label for="bdate">Shop Description</label>
			<input type="date" class="form-control" id="shop_description" placeholder="Shop Description" name="shop_description">
		</div>
		<div class="form-group">
			<label for="password">password</label>
			<input type="password" class="form-control" id="password" placeholder="password" name="password" value="{{ $user->password }}">
		</div>
		<div class="form-group">
			<label for="phonenumber">Phone Number</label>
			<input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="nohp" value="{{ $user->nohp }}">
		</div>
		<div class="form-group">
			<label for="phonenumber">Gender</label>
			<label class="radio-inline">
			<input type="radio" name="Gender" id="inlineRadio1" value="Gender"> Male
			</label>
			<label class="radio-inline">
			<input type="radio" name="Gender" id="inlineRadio2" value="Gender"> Female
		</label>
		</div>
			<input type="submit" name="submit" class="btn btn-primary btn-block">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>	
</div>


@endsection