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
                    <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                    </section>
                    <form class=" navbar-left-right">
                        <input onblur="if (this.value == '') {this.value = 'Search...';}" onfocus="this.value = '';" type="text" value="Search..."> <input class="fa fa-search" type="submit" value="">
                    </form>
                    <div class="clearfix"></div>
                </div><!-- Brand and toggle get grouped for better mobile display -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men">
                    <ul class=" nav_1">
                        <li class="dropdown at-drop">
                            <a class="dropdown-toggle dropdown-at" data-toggle="dropdown" href="#"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                            <ul class="dropdown-menu menu1" role="menu">
                                <li>
                                    <a href="#"></a>
                                    <div class="user-new">
                                        <p>New user registered</p><span>40 seconds ago</span>
                                    </div>
                                    <div class="user-new-left">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <a href="#"></a>
                                    <div class="user-new">
                                        <p>Someone special liked this</p><span>3 minutes ago</span>
                                    </div>
                                    <div class="user-new-left">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <a href="#"></a>
                                    <div class="user-new">
                                        <p>John cancelled the event</p><span>4 hours ago</span>
                                    </div>
                                    <div class="user-new-left">
                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <a href="#"></a>
                                    <div class="user-new">
                                        <p>The server is status is stable</p><span>yesterday at 08:30am</span>
                                    </div>
                                    <div class="user-new-left">
                                        <i class="fa fa-info"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <a href="#"></a>
                                    <div class="user-new">
                                        <p>New comments waiting approval</p><span>Last Week</span>
                                    </div>
                                    <div class="user-new-left">
                                        <i class="fa fa-rss"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li><a class="view" href="#">View all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle dropdown-at" data-toggle="dropdown" href="#"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                                <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="clearfix"></div>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a class=" hvr-bounce-to-right" href="index.html"><i class="fa fa-dashboard nav_icon"></i><span class="nav-label">Dashboards</span></a></li>
                            <li>
                                <a class=" hvr-bounce-to-right" href="#"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu Levels</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="graphs.html"><i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="maps.html"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="typography.html"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>
                                </ul>
                            </li>
                            <li><a class=" hvr-bounce-to-right" href="inbox.html"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span></a></li>
                            <li><a class=" hvr-bounce-to-right" href="gallery.html"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span></a></li>
                            <li>
                                <a class=" hvr-bounce-to-right" href=""><i class="fa fa fa-dropbox nav_icon"></i> <span class="nav-label">Pengiriman</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a class=" hvr-bounce-to-right" href="{{route('pengiriman.create')}}"><i class="fa  fa-plus nav_icon"></i>Add Pengiriman</a></li>
                                    <li><a class=" hvr-bounce-to-right" href="{{route('pengiriman.index')}}"><i class="fa fa-table nav_icon"></i>View Pengiriman</a></li>
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