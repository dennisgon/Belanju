<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Belanju</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" name="keywords">
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <link href="{{URL::asset('css/admin/style.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>  
    </script><!-- Mainly scripts -->

    <script src="{{URL::asset('js/admin/jquery.metisMenu.js')}}">
    </script>
    <script src="{{URL::asset('js/admin/jquery.slimscroll.min.js')}}">
    </script><!-- Custom and plugin javascript -->
    <link href="{{URL::asset('css/admin/custom.css')}}" rel="stylesheet">
    <script src="{{URL::asset('js/admin/custom.js')}}">
    </script>
    <script src="{{URL::asset('js/admin/screenfull.js')}}">
    </script>
    <script>
           $(function () {
               $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

               if (!screenfull.enabled) {
                   return false;
               }

               

               $('#toggle').click(function () {
                   screenfull.toggle($('#container')[0]);
               });
               

               
           });
    </script>
</head>
<body>
    <div id="wrapper">
        <!--=-->
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <h1 style="margin-top: 0px !important;"><a class="navbar-brand" href="index.html" style="background-color:#37c6f5 !important; ">Belanju</a></h1>
            </div>
            <div class=" border-bottom">
                <div class="full-left">

                </div><!-- Brand and toggle get grouped for better mobile display -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men">
                </div><!-- /.navbar-collapse -->
                <div class="clearfix"></div>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a class=" hvr-bounce-to-right" href="index.html"><i class="fa fa-dashboard nav_icon"></i><span class="nav-label">home</span></a></li>
                            <li>
                                <a class=" hvr-bounce-to-right" href="#"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Laporan Pemasukan</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="graphs.html"><i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="maps.html"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="typography.html"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>
                                </ul>
                            </li>
                            <li><a class=" hvr-bounce-to-right" href="inbox.html"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Order Pakaian</span></a></li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-dropbox nav_icon"></i> <span class="nav-label">Pengiriman</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('pengiriman.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Pengiriman</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('pengiriman.index')}}"><i class="fa fa-table nav_icon"></i>View Pengiriman</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-eye nav_icon"></i> <span class="nav-label">Membership</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('membership.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Membership</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('membership.index')}}"><i class="fa fa-table nav_icon"></i>View Membership</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-money nav_icon"></i> <span class="nav-label">Jenis Pembayaraan</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('jenisPem.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Jenis Pembayaraan</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('jenisPem.index')}}"><i class="fa fa-table nav_icon"></i>View Jenis Pembayaraan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-columns nav_icon"></i> <span class="nav-label">Tempat Promosi</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('tempatPromosi.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Tempat Promosi</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('tempatPromosi.index')}}"><i class="fa fa-table nav_icon"></i>View Tempat Promosi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa  fa-university nav_icon"></i> <span class="nav-label">Bank</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('bank.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Bank</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('bank.index')}}"><i class="fa fa-table nav_icon"></i>View Bank</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-ticket nav_icon"></i> <span class="nav-label">Voucher</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('voucher.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Voucher</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('voucher.index')}}"><i class="fa fa-table nav_icon"></i>View Voucher</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-sort nav_icon"></i> <span class="nav-label">Kategori</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('kategori.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Kategori</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('kategori.index')}}"><i class="fa fa-table nav_icon"></i>View Kategori</a></li>
                                </ul>
                            </li>
                            <li><a class=" hvr-bounce-to-right" href="{{Route('toko.index')}}"><i class="fa fa-shopping-basket nav_icon"></i> <span class="nav-label">Toko</span></a></li>
                            <li>
                                <a class=" hvr-bounce-to-right" href="#"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{url('admin/about')}}"><i class="fa  fa-book nav_icon"></i>About</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{url('admin/contact')}}"><i class="fa fa-building-o nav_icon"></i>Contact</a></li>                                    <li><a class=" hvr-bounce-to-right" href="{{url('admin/logotemplate')}}"><i class="fa fa-desktop nav_icon"></i>Logo & Template</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="gray-bg dashbard-1" id="page-wrapper">
            <div class="content-main">
                <!--banner-->
                <div class="banner">
                    <h2><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>Blank</span></h2>
                </div><!--//banner-->
                <!--faq-->
                <div class="blank">
                    <div class="blank-page">
                            @section('konten')
                            
                            @show
                    </div>
                </div><!--//faq-->
                <!---->
                <div class="copy">
                    <p>&copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!---->
    <!--scrolling js-->
    <script src="{{URL::asset('js/admin/jquery.nicescroll.js')}}">
    </script> 
    <script src="{{URL::asset('js/admin/scripts.js')}}">
    </script> <!--//scrolling js-->
</body>
</html>