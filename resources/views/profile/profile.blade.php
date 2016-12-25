@extends('layout.app')

@section('title', 'Profile')

@section('konten')
 @parent

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"  style="margin-top:40px;" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">{{ $user->name }}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center">
                <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                </div>
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username</td>
                        <td>{{ $user->username }}</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                      <tr>
                        <tr>
                          <td>Gender</td>
                          <td>Female</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>{{ $user->email }}</td>
                        </tr>
                        <td>Phone Number</td>
                        <td>{{ $user->nohp }}</td>
                        <tr>
                          <td>Alamat</td>
                          <td>
                          <div class="row">
                            @foreach( $alamat as $alamat)

                              <div class="col-md-8">
                                  <div class="col-md-12">
                                    {{ $alamat->name }}
                                  </div>
                                  <div class="col-md-12">
                                    {{ $alamat->receiver }}
                                  </div>
                                  <div class="col-md-12">
                                    {{ $alamat->alamat  }}
                                  </div>
                                  <div class="col-md-12">
                                    {{ $alamat->pos }}
                                  </div>
                                  <div class="col-md-12">
                                    {{ $alamat->provinsi  }}
                                  </div>
                              </div>
                              @endforeach
                            
                              <div class="col-md-4">
                                <div class="col-md-12">
                                  <a href="{{ url('/profile/alamat/') }}" class="btn btn-primary">Tambah Alamat</a>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                  <a href="{{ url('/profile/alamat/change') }}" class="btn btn-warning">Change Alamat</a>
                                </div>

                              </div> 
                            </div> 
                          </td>
                        </tr>
                      </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
            @if(Auth::user()->id == $user->id)
            <div class="panel-footer">
              <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-envelope"></i>Message
              </a>
              <span class="pull-right">
                <a href="{{ url('profile/edit', Auth::user()->id) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">
                  <i class="glyphicon glyphicon-edit"> <span>Update</span></i>
                </a>
                <a href="{{ route('logout') }}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">
                  <i class="glyphicon glyphicon-remove"></i>Log Out
                </a>
              </span>
            </div>
          </div>
          @endif
        </div>

<section>

</section>


@endsection