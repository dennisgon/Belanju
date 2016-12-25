@extends('layout.app')

@section('title', 'Profile')

@section('konten')
 @parent
 <style type="text/css">
 	label {
    	font-weight: normal !important;
	}
 </style>
 <div class="container-fluid">
	 <div class="row">
	 	<div class="col-md-8">
	 		 	<table class="table">
	 		 	  <thead>
	 		 	    <tr>
	 		 	      <th>Nama Tempat</th>
	 		 	      <th>Penerima</th>
	 		 	      <th>Telepon</th>
	 		 	      <th>Alamat</th>
	 		 	      <th>kode pos</th>
	 		 	      <th>action</th>
	 		 	    </tr>
	 		 	  </thead>
	 		 	  <tbody>
	 				<tr class="active">
	 					<td>Active</td>
	 					<td>Activeson</td>
	 					<td>act@example.com</td>
	 				</tr>
	 		 	    <tr>
	 		 	      <td>Default</td>
	 		 	      <td>Defaultson</td>
	 		 	      <td>def@somemail.com</td>
	 		 	    </tr>      
	 		 	  </tbody>
	 		 	</table>
	 	</div>

 </div>


 </div>
@endsection