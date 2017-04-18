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
                        <li>
                            <a href="" style="width: 70%; display: inline-block;">
                                <span class="mail-sender">You Tube</span>
                                <span class="mail-subject">New subscribers!</span>
                                <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                            </a>
                            <button type="button" class="btn btn-default">Reply</button>
                        </li>
                        <li>
                            <a href="" style="width: 70%; display: inline-block;">
                                <span class="mail-sender">You Tube</span>
                                <span class="mail-subject">New subscribers!</span>
                                <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                            </a>
                            <button type="button" class="btn btn-default">Reply</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection