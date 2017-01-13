@extends('layout.app')

@section('title', 'Profile')

@section('konten')
    @parent
    <style>


        /* ==========================================================================
           Author's custom styles
           ========================================================================== */

        body
        {
            font-family: 'Open Sans', sans-serif;
        }

        .fb-profile img.fb-image-lg{
            z-index: 0;
            width: 100%;
            margin-bottom: 10px;
        }

        .fb-image-profile
        {
            margin: -90px 10px 0px 50px;
            z-index: 9;
            width: 20%;
        }

        @media (max-width:768px)
        {

            .fb-profile-text>h1{
                font-weight: 700;
                font-size:16px;
            }

            .fb-image-profile
            {
                margin: -45px 10px 0px 25px;
                z-index: 9;
                width: 20%;
            }
        }
    </style>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="container">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>Eli Macy</h1>
                <p>Girls just wanna go fun.</p>
            </div>
        </div>
    </div> <!-- /container -->
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-md-4" style="display: inline-block; width: 200px; padding-top: 27px;">
                <ul class="nav nav-list">
                    <li><a href="index"><i class="icon-home"></i> Produk</a></li>
                    <li><a href="#"><i class="icon-envelope"></i> Tambah Produk</a></li>
                    <li><a href="#"><i class="icon-comment"></i> Laporan Penjualan </a></li>
                    <li class="active"><a href="#"><i class="icon-user"></i> Message <span class="badge badge-info">10</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-comment"></i> Settings</a></li>
                </ul>
        </div>
        <div class="container-fluid" style="display: inline-block;width: 82%;">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-4">
                    <div class="productbox">
                        <img src="http://lorempixel.com/460/250/" class="img-responsive">
                        <div class="producttitle">Twitter, Inc.</div>
                        <p class="text-justify">The place to be.</p>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                        <div class="productprice">
                            <div class="pull-right">
                                <a href="#" class="btn btn-success btm-sm" role="button">Menu <span class="glyphicon glyphicon-cutlery"></span></a>
                            </div>
                            <div class="pricetext">
                                <a href="#" class="btn btn-warning btm-sm" role="button">Edit <span class="glyphicon glyphicon-cog"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-4">
                    <div class="productbox">
                        <img src="http://lorempixel.com/460/250/" class="img-responsive">
                        <div class="producttitle">Twitter, Inc.</div>
                        <p class="text-justify">The place to be.</p>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                        <div class="productprice">
                            <div class="pull-right">
                                <a href="#" class="btn btn-success btm-sm" role="button">Menu <span class="glyphicon glyphicon-cutlery"></span></a>
                            </div>
                            <div class="pricetext">
                                <a href="#" class="btn btn-warning btm-sm" role="button">Edit <span class="glyphicon glyphicon-cog"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-4">
                    <div class="productbox">
                        <img src="http://lorempixel.com/460/250/" class="img-responsive">
                        <div class="producttitle">Twitter, Inc.</div>
                        <p class="text-justify">The place to be.</p>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                        <div class="productprice">
                            <div class="pull-right">
                                <a href="#" class="btn btn-success btm-sm" role="button">Menu <span class="glyphicon glyphicon-cutlery"></span></a>
                            </div>
                            <div class="pricetext">
                                <a href="#" class="btn btn-warning btm-sm" role="button">Edit <span class="glyphicon glyphicon-cog"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-4">
                    <div class="productbox">
                        <img src="http://lorempixel.com/460/250/" class="img-responsive">
                        <div class="producttitle">Twitter, Inc.</div>
                        <p class="text-justify">The place to be.</p>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                        <div class="productprice">
                            <div class="pull-right">
                                <a href="#" class="btn btn-success btm-sm" role="button">Menu <span class="glyphicon glyphicon-cutlery"></span></a>
                            </div>
                            <div class="pricetext">
                                <a href="#" class="btn btn-warning btm-sm" role="button">Edit <span class="glyphicon glyphicon-cog"></span></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection