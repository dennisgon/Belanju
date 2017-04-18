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
            <img align="left" class="fb-image-lg" src="{{asset($toko->sampulToko)}}" alt="Profile image example" height="280px" width="850px"/>
            <img align="left" class="fb-image-profile thumbnail" src="{{asset($toko->imagetoko) }}" height="180px" width="180px" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>{{$toko->nama}}</h1>
                <p>{{$toko->tagline}}</p>
            </div>
        </div>
    </div> <!-- /container -->
    <div class="container" style="margin-top: 50px; margin-bottom: 20px;">
        <div class="col-xs-12 col-sm-8 col-md-4" style="display: inline-block; width: 200px; padding-top: 27px;">
                <ul class="nav nav-list">
                    <li><a href={{route('toko.show', session()->get('tokos')[0])}}><i class="icon-home"></i> Produk</a></li>
                    <li><a href="{{route('pakaian.create')}}"><i class="icon-envelope"></i> Tambah Produk</a></li>
                    <li><a href="#"><i class="icon-comment"></i> Laporan Penjualan </a></li>
                    <li class="active"><a href="{{route('pesan.show', $toko->id)}}"><i class="icon-user"></i> Message <span class="badge badge-info">{{$toko->pesans()->where('status','inbox')->count()}}</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-comment"></i> Settings</a></li>
                </ul>
        </div>

        <div class="container-fluid" style="display: inline-block;width: 82%;">
            @foreach($pakaian as $pakaians)
                <a href="{{route('pakaian.show', $pakaians->id)}}">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-4">
                        <div class="productbox">
                            @foreach($pakaians->gambars()->where('StatusGambar','=','pertama')->get() as $gambar)
                            <img src="{{asset($gambar->gambar)}}" class="img-responsive">
                            @endforeach
                            <div class="producttitle">{{$pakaians->namaPakaian}}</a></div>
                            <p class="text-justify">{{$pakaians->deskripsiSingkat}}</p>
                            <address>
                                <p>{{$pakaians->deskripsiPakaian}}</p>
                            </address>

                            <address>
                                <strong>Rp {{$pakaians->hargaSatuan}}</strong><br>
                                <p>Panjang: {{$pakaians->panjang}}</p>
                                <p>Lebar: {{$pakaians->lebar}}</p>
                                <p>JenisKelamin: {{$pakaians->jenisKelamin}}</p>

                            </address>
                            <div class="productprice">

                                <div class="pricetext">
                                    <a href="#" class="btn btn-warning btm-sm" role="button">Edit <span class="glyphicon glyphicon-cog"></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>

    </div>

@endsection