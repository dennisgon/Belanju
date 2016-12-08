@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
 	@parent
 	<section>

 		<div class="container-fluid " style="width: 50%; margin-bottom: 100px; margin-top: 40px;">
 		 <div class="row">
 		    	<h2 style="margin:20px;">Edit Profile</h2>
 		        <div class="btn-group btn-breadcrumb" style="margin:20px;">
 		            <a href="{{ route('home') }}" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
 		            <a href="{{ route('profile', Auth::user()->id) }}" class="btn btn-primary">Profile</a>
 		            <a href="#" class="btn btn-primary">Edit</a>
 		        </div>
 			</div>
 				<div class="well well-lg" style="background-color:#F5F5F5">
	 				<form action="{{ url('profile/update', Auth::user()->id) }}" method="POST">
			 			<div class="form-group">
			 			  <label for="name">Name</label>
			 			  <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user->name }}">
			 			</div>
			 			<div class="form-group">
			 			  <label for="email">Email</label>
			 			  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
			 			</div>
			 			<div class="form-group">
			 			  <label for="bdate">Birth Date</label>
			 			  <input type="date" class="form-control" id="bdate" placeholder="bdate" name="bdate">
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
 		</div>
 	</section>


@endsection