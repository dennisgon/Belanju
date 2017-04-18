@extends('layout.app')

@section('title', 'Profile')

@section('konten')
    <style>
        /*Forms setup*/
        .form-control {
            border-radius:0;
            box-shadow:none;
            height:auto;
        }
        .float-label{
            font-size:10px;
        }
        input[type="text"].form-control,
        input[type="search"].form-control{
            border:none;
            border-bottom:1px dotted #CFCFCF;
        }
        textarea {
            border:1px dotted #CFCFCF!important;
            height:130px!important;
        }
        /*Content Container*/
        .content-container {
            background-color:#fff;
            padding:35px 20px;
            margin-bottom:20px;
        }
        h1.content-title{
            font-size:32px;
            font-weight:300;
            text-align:center;
            margin-top:0;
            margin-bottom:20px;
            font-family: 'Open Sans', sans-serif!important;
        }
        /*Compose*/
        .btn-send{
            text-align:center;
            margin-top:20px;
        }
        /*mail list*/

        ul.mail-list{
            padding:0;
            margin:0;
            list-style:none;
            margin-top:30px;
        }
        ul.mail-list li a{
            display:block;
            border-bottom:1px dotted #CFCFCF;
            padding:20px;
            text-decoration:none;
        }
        ul.mail-list li:last-child a{
            border-bottom:none;
        }
        ul.mail-list li a:hover{
            background-color:#DBF9FF;
        }
        ul.mail-list li span{
            display:block;
        }
        ul.mail-list li span.mail-sender{
            font-weight:600;
            color:#8F8F8F;
        }
        ul.mail-list li span.mail-subject{
            color:#8C8C8C;
        }
        ul.mail-list li span.mail-message-preview{
            display:block;
            color:#A8A8A8;
        }
        .mail-search{
            border-bottom-color:#7FBCC9!important;
        }
    </style>
    <div class="tab-pane" id="sent-mail">

        <div class="container">
            <div class="content-container clearfix">
                <div class="col-md-12">
                    <h1 class="content-title">Pesan Masuk</h1>

                    <ul class="mail-list">
                        @foreach($pesan as $pesans)
                        <li>
                            <a href="" style="width: 70%; display: inline-block;">
                                <span class="mail-sender">{{$pesans->user()->firstOrFail()->username}}</span>
                                <span class="mail-subject">{{$pesans->subjek}}</span>
                                <span class="mail-message-preview">{{$pesans->message}}</span>
                            </a>
                            <button type="button" class="btn btn-default rep" data-toggle="modal" data-target="#myModal" user="{{$pesans->user_id}}" toko="{{$pesans->toko_id}}" subjek = "{{$pesans->subjek}}" >Reply</button>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message</h4>
                </div>
                <form method="POST" action="{{route('pesan.storeOut')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="subjek">Subjek:</label>
                            <input type="text" class="form-control" id="subjek" name="subjek">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan:</label>
                            <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
                        </div>
                        <input type="hidden" value="" name="useri" id="useri">
                        <input type="hidden" value="" name="toko" id="toko">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-default" value="Kirim"/>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".rep").click(function(){

                var subjek = $(this).attr('subjek');
                var toko = $(this).attr('toko');
                var user = $(this).attr('user');

                $("#subjek").val("RE: "+subjek);
                $("#useri").val(user);
                $("#toko").val(toko);

            });
        });

    </script>
@endsection