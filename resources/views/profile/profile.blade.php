@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
 @parent

<section>
  <div class="container" style="margin: 20px;">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">{{ $user->name }}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center">
                <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                </div>
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"><br><dl><dt>DEPARTMENT:</dt><dd>Administrator</dd><dt>HIRE DATE</dt><dd>11/12/2013</dd><dt>DATE OF BIRTH</dt><dd>11/12/2013</dd><dt>GENDER</dt><dd>Male</dd></dl></div>-->
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
                      </tr>
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
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
      </div>
    </div>
  </section>
<section>

</section>


@endsection